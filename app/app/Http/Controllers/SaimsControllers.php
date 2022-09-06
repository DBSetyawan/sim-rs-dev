<?php

namespace App\Http\Controllers;

use DataTables;
use Carbon\Carbon;
use App\Models\tbPO;
use App\Models\User;
use App\Models\tbbrg;
use App\Models\tbsaims;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\HistoryPUI;
use Illuminate\Support\Str;
use App\Models\SalesInvoice;
use Illuminate\Http\Request;
use App\Models\SalesInvoiced;
use App\Models\purchaseInvoiceh;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Riskihajar\Terbilang\Facades\Terbilang;

class SaimsControllers extends Controller
{
    public function index(User $model)
    {
        $sm = tbsaims::all();
        return view('saims.index', compact('sm'));
    }

    public function indexPUI()
    {

        /**
         * query that contain brackets inside a brackets
         */

        //  ======= use this ====== like this : WHERE (a = 1 OR (b = 1 and c = 5))
        // $q->where('a', 1)->orWhere(function($q2){
        //     $q2->where('b', 1)->where('c', 5);
        //   });

        $KOP = new purchaseInvoiceh();
        // $KOP->setConnection('KOP_sync');
        $TrfSAIM = $KOP->select(DB::raw('year(DocDate) as tanggal'))->groupBy('tanggal')->get();
        // $sm = $KOP->all();
        // dd($sm);
        return view('pui.index', compact('TrfSAIM'));
    }

    public function smanual()
    {

        $sm = tbsaims::all();

        return view('saimanual.index', compact('sm'));
    }

    public function historyPUI(User $model)
    {

        $sm = HistoryPUI::all();

        return view('pui.history_pui', compact('sm'));
    }

    public function detailSalesIvoice(Request $request)
    {

        $slinvh = SalesInvoice::with('SalesOrder.MasterCustomers', 'MasterGoodissue')
            ->where('DocNo', 'like', '%' . $request->dataSalesInvoceDocNo . '%')
            ->get();

        $sd = SalesInvoiced::with('MaterialCode')
            ->where('DocNo', 'like', '%' . $request->dataSalesInvoceDocNo . '%')
            ->get();

        return response()->json(['sh' => $slinvh[0], 'sd' => $sd[0]]);
    }

    public function detailPurchaseInvoiceH(Request $request)
    {

        $slinvh = purchaseInvoiceh::where('DocNo', 'like', '%' . $request->dataSalesInvoceDocNo . '%')->get();

        return response()->json(['sh' => $slinvh[0]]);
    }

    public function updatemanuallysaims(Request $request)
    {

        $normal = $request->dsaim;
        $po_no = json_decode($request->dpo_no['po_no'], true);
        $nama_barang = json_decode($request->dpo_no['nama_barang'], true);
        $jumlah = json_decode($request->dpo_no['jumlah'], true);
        $harga = json_decode($request->dpo_no['harga'], true);
        $code = json_decode($request->dpo_no['code'], true);
        $unit = json_decode($request->dpo_no['unit'], true);
        $date = date("Y") . "-" . date("m") . "-" . date("d");

        $total = $this->sumQty($jumlah);
        $harga_i = $this->sumQty($harga);
        $check_sim_qty = floatval($normal['sim_check_qty']);
        $price_sim = floatval($normal['price_sim']);

        if ($total > $check_sim_qty || $total < $check_sim_qty && $harga_i > $price_sim || $harga_i < $price_sim) {

            return response()->json(['r' => 'false']);
        } else {


            tbsaims::where('id', $normal['id_sai'])
                ->update(
                    [
                        'sai' => $normal['saim_no'],
                        'kodeCus' => $normal['Code'],
                        'namaCus' => $normal['customer_name'],
                        'ChangedDate' => $date,
                        'ChangedBy' => Auth::user()->name,
                    ]
                );

            tbPO::where('id_sai', $normal['saim_no'])->delete();

            foreach ($po_no as $indexs => $fx) {

                $tb_po[] = [
                    'id_sai' => $normal['saim_no'],
                    'po_no' => $fx,
                ];
            }

            tbPO::insert($tb_po);

            tbbrg::where('sai', $normal['saim_no'])->delete();

            foreach ($nama_barang as $indexs => $fx) {

                $tb_barang[] = [
                    'sai' => $normal['saim_no'],
                    'kode' => $code[$indexs],
                    'nama' => $fx,
                    'unit' => $unit[$indexs],
                    'harga' => $harga[$indexs],
                    'jumlah' => $jumlah[$indexs],
                ];
            }

            tbbrg::insert($tb_barang);

            return response()->json(['updathem' => $request->all()]);
        }
    }

    public function delete(Request $r, $id)
    {

        tbsaims::where('id', $id)->delete();

        return redirect()->route('saims.index')
            ->with('success', 'SAI berhasil dihapus');
    }

    public function reports($rpt, $checksum)
    {
        $customPaper = array(0, 0, 595.28, 841.89);
        $detailrows_sai = tbsaims::where('sai', $rpt)->first();
        $details_po = tbPO::where('id_sai', $rpt)->get();

        foreach ($details_po as $key => $value) {
            # code...
            $PO[] = $value->po_no;
        }

        $cek_isi_PO = count($PO);
        $KOP = new SalesInvoice();
        $KOP->setConnection('KOP_sync');

        $customers = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Address;
        $no_SOD = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->DocNo;
        $TAX = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->TaxNo;
        $TOP = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->TOP;
        $todatetimeStringcreatedSAI = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->DocDate;
        $npwp = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->TaxNumber;
        $phone_cs = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Phone;
        $emailcs = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Email;
        $fax_cs = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Fax;
        $ship = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Address;
        $ship_customer = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Name;

        $Tanggal = Carbon::parse((string) $todatetimeStringcreatedSAI)
            ->addDays($TOP)
            ->locale('id')
            ->isoFormat('DD MMMM YYYY', 'Do MMMM');
        $tanggal_jatuh_tempo = Carbon::parse($todatetimeStringcreatedSAI)
            ->addDays($TOP)
            ->locale('id')
            ->isoFormat('DD MMMM YYYY', 'Do MMMM');

        $dt_live_sim_GID = $KOP->where('DocNo', $rpt)->first();
        $tbbrg = tbbrg::whereIn('sai', [$rpt])->get();
        $total_rslt = 0;

        foreach ($tbbrg as $key => $isaims_tbbrg) {
            # code...
            $brgdt[] = $isaims_tbbrg;
            $jumlah = $this->convert_to_number(intval($isaims_tbbrg['jumlah'] * $isaims_tbbrg['harga']));
            $total_rslt = $total_rslt + ($isaims_tbbrg['jumlah'] * $isaims_tbbrg['harga']);
            $ppn = intval($total_rslt * 10) / 100;
            $total_akhir = intval($total_rslt + $ppn);

            $tr = Terbilang::make($total_akhir, ' rupiah', '');
        }

        $data = ['name' => Str::of($rpt)->pipe('md5')->prepend('')];
        $pdf = PDF::loadView('saimanual.print', compact(
            'tr',
            'ppn',
            'total_akhir',
            'phone_cs',
            'fax_cs',
            'ship_customer',
            'ship',
            'total_rslt',
            'brgdt',
            'cek_isi_PO',
            'Tanggal',
            'tanggal_jatuh_tempo',
            'todatetimeStringcreatedSAI',
            'npwp',
            'TOP',
            'TAX',
            'no_SOD',
            'detailrows_sai',
            'dt_live_sim_GID',
            'PO',
            'customers',
            'emailcs'
        ));
        $pdf->SetPaper($customPaper, 'potrait');
        return $pdf->stream("" . Str::of($rpt)->pipe('md5')->prepend('') . ".pdf", array("Attachment" => false));
    }

    public function rpt_preview($rpt)
    {
        $customPaper = array(0, 0, 595.28, 841.89);
        $detailrows_sai = tbsaims::where('sai', $rpt)->first();
        $details_po = tbPO::where('id_sai', $rpt)->get();

        foreach ($details_po as $key => $value) {
            # code...
            $PO[] = $value->po_no;
        }

        $cek_isi_PO = count($PO);
        $KOP = new SalesInvoice();
        $KOP->setConnection('KOP_sync');

        $customers = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Address;
        $no_SOD = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->DocNo;
        $TAX = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->TaxNo;
        $TOP = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->TOP;
        $todatetimeStringcreatedSAI = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->DocDate;
        $npwp = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->TaxNumber;
        $phone_cs = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Phone;
        $emailcs = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Email;
        $fax_cs = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Fax;
        $ship = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Address;
        $ship_customer = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')->where('DocNo', $rpt)->first()->SalesOrder->MasterCustomers->Name;

        $Tanggal = Carbon::parse((string) $todatetimeStringcreatedSAI)
            ->addDays($TOP)
            ->locale('id')
            ->isoFormat('DD MMMM YYYY', 'Do MMMM');
        $tanggal_jatuh_tempo = Carbon::parse($todatetimeStringcreatedSAI)
            ->addDays($TOP)
            ->locale('id')
            ->isoFormat('DD MMMM YYYY', 'Do MMMM');

        $dt_live_sim_GID = $KOP->where('DocNo', $rpt)->first();
        $tbbrg = tbbrg::whereIn('sai', [$rpt])->get();
        $total_rslt = 0;

        foreach ($tbbrg as $key => $isaims_tbbrg) {
            # code...
            $brgdt[] = $isaims_tbbrg;
            $jumlah = $this->convert_to_number(intval($isaims_tbbrg['jumlah'] * $isaims_tbbrg['harga']));
            $total_rslt = $total_rslt + ($isaims_tbbrg['jumlah'] * $isaims_tbbrg['harga']);
            $ppn = intval($total_rslt * 10) / 100;
            $total_akhir = intval($total_rslt + $ppn);

            $tr = Terbilang::make($total_akhir, ' rupiah', '');
        }

        $data = ['name' => Str::of($rpt)->pipe('md5')->prepend('')];
        $pdf = PDF::loadView('saimanual.print', compact(
            'tr',
            'ppn',
            'total_akhir',
            'phone_cs',
            'fax_cs',
            'ship_customer',
            'ship',
            'total_rslt',
            'brgdt',
            'cek_isi_PO',
            'Tanggal',
            'tanggal_jatuh_tempo',
            'todatetimeStringcreatedSAI',
            'npwp',
            'TOP',
            'TAX',
            'no_SOD',
            'detailrows_sai',
            'dt_live_sim_GID',
            'PO',
            'customers',
            'emailcs'
        ));
        $pdf->SetPaper($customPaper, 'potrait');
        return $pdf->stream("" . Str::of($rpt)->pipe('md5')->prepend('') . ".pdf", array("Attachment" => false));
    }

    public static function getSqlWithBindings($query)
    {
        return vsprintf(str_replace('?', '%s', $query->toSql()), collect($query->getBindings())->map(function ($binding) {
            return is_numeric($binding) ? $binding : "'{$binding}'";
        })->toArray());
    }

    public function saveSIM_lsH(Request $request)
    {

        /**
         * proses menyimpan PO & dinamis nama barang/ jumlah/ harga.
         */
        $normal = $request->formPUI;

        $KOP = new purchaseInvoiceh();

        $KOP->setConnection('KOP_sync');

        if (strlen($normal['faktur']) == 13 && strlen($normal['prefix']) == 3) {

            $qr = tap($KOP->whereIn('DocNo', [$normal['SAIno']]))
                ->update(
                    [
                        'SupplierInvNo' => $normal['suplier'],
                        'TaxNo' => $normal['faktur'],
                        'Information' => $normal['information'],
                        'TaxPrefix' => $normal['prefix'],
                        'ChangedBy' => Auth::user()->user_sim,
                        'ChangedDate' => date("Y-m-d h:i:s")
                    ]
                );

            HistoryPUI::insert([
                'pui' => $normal['SAIno'],
                'user_sim' => Auth::user()->name,
                'tanggal' => date("Y-m-d h:i:s"),
                'query' => $this->getSqlWithBindings($qr),
            ]);
        } elseif ($normal['taxstatus'] == "No") {

            $qr = tap($KOP->whereIn('DocNo', [$normal['SAIno']]))
                ->update(
                    [
                        'SupplierInvNo' => $normal['suplier'],
                        'TaxNo' => $normal['faktur'],
                        'Information' => $normal['information'],
                        'TaxPrefix' => $normal['prefix'],
                        // 'ChangedBy' => Auth::user()->name,
                        'ChangedDate' => date("Y-m-d h:i:s")
                    ]
                );

            HistoryPUI::insert([
                'pui' => $normal['SAIno'],
                'user_sim' => Auth::user()->name,
                'tanggal' => date("Y-m-d h:i:s"),
                'query' => $this->getSqlWithBindings($qr),
            ]);
        } else {

            return response()->json(['error' => 'gagal update/simpan data PUI.']);
        }

        return response()->json(['pui_manually' => $this->getSqlWithBindings($qr)]);
    }

    protected function tofloat($num)
    {
        $dotPos = strrpos($num, '.');
        $commaPos = strrpos($num, ',');
        $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos : ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

        if (!$sep) {
            return floatval(preg_replace("/[^0-9]/", "", $num));
        }

        return floatval(
            preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
                preg_replace("/[^0-9]/", "", substr($num, $sep + 1, strlen($num)))
        );
    }

    protected function sumQty($arr)
    {
        $count = 0;
        foreach ($arr as $val) {
            if (!is_numeric($val)) {
                continue;
            } else {
                $count = $count + ($val * 1);
            }
        }
        return $count;
    }

    public function savemanuallysaim(Request $request)
    {

        /**
         * proses menyimpan PO & dinamis nama barang/ jumlah/ harga.
         */
        $normal = $request->dsaim;
        $po_no = json_decode($request->dpo_no['po_no'], true);
        $nama_barang = json_decode($request->dpo_no['nama_barang'], true);
        $jumlah = json_decode($request->dpo_no['jumlah'], true);
        $harga = json_decode($request->dpo_no['harga'], true);
        $code = json_decode($request->dpo_no['code'], true);
        $unit = json_decode($request->dpo_no['unit'], true);
        $total = $this->sumQty($jumlah);
        $harga_i = $this->sumQty($harga);
        $check_sim_qty = floatval($normal['sim_check_qty']);
        $price_sim = floatval($normal['price_sim']);

        if ($total > $check_sim_qty || $total < $check_sim_qty && $harga_i > $price_sim || $harga_i < $price_sim) {

            return response()->json(['r' => 'false']);
        } else {

            /**
             * menyimpan form normal sai
             */
            $normals = [
                'sai' => $normal['saim_no'],
                'kodeCus' => $normal['Code'],
                'namaCus' => $normal['customer_name'],
                'printed' => $normal['printed'],
                'ApprovedBy' => $normal['approvedby'],
                'CreatedBy' => $normal['createdby'],
                'ChangedDate' => $normal['changeddate'],
                'ChangedBy' => $normal['changedby'],
                'arc' => NULL,
                'ard' => NULL,
                'status_docs' => 'open'
            ];

            tbsaims::insert($normals);

            foreach ($po_no as $indexs => $fx) {

                $tb_po[] = [
                    'id_sai' => $normal['saim_no'],
                    'po_no' => $fx,
                ];
            }

            tbPO::insert($tb_po);

            foreach ($nama_barang as $indexs => $fx) {

                $tb_barang[] = [
                    'sai' => $normal['saim_no'],
                    'kode' => $code[$indexs],
                    'nama' => $fx,
                    'unit' => $unit[$indexs],
                    'harga' => $harga[$indexs],
                    'jumlah' => $jumlah[$indexs],
                ];
            }

            tbbrg::insert($tb_barang);

            return response()->json(['manually' => $total]);
        }
    }

    public function SalesInvoiceRVK(Request $request)
    {


        if (!empty($request->docnox)) {
            $Salesinvoice = SalesInvoice::with('SalesOrder.MasterCustomers', 'MasterGoodissue')
                ->where('DocNo', 'like', '%' . $request->docnox . '%')->get();
        } else {
            $Salesinvoice = SalesInvoice::limit(200)->get();
        }

        if ($request->ajax()) {

            return DataTables::of($Salesinvoice)
                ->editColumn('DocNo', function ($dt) {
                    $btn = "<span class='badge badge-warning' style='font-size:13px'>" . strtoupper($dt->DocNo) . "</span>";

                    return $btn;
                })->addColumn('sales_invoice', function ($row) {

                    $btn = "<button class='btn btn-success' id='saim_result' data-id='" . $row->DocNo . "'>Pilih</button></div>";

                    return $btn;
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->has('docno')) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            return Str::contains($row['DocNo'], $request->get('docno')) ? true : false;
                        });
                    }
                })
                ->rawColumns([
                    'DocNo', 'sales_invoice',
                ])
                ->escapeColumns()->make(true);
        }
    }

    public function CheckDataSAIM(Request $rq)
    {

        $rslt = tbsaims::where('sai', $rq->req_sai)->first();

        return response()->json(['response' => $rslt]);
    }

    public function EventDiss(Request $rq)
    {

        $rslt = tbsaims::where('sai', $rq->req_sai)->update([
            'ChangedBy' => Auth::user()->name,
            'status_docs' => "dissaproved"
        ]);

        return response()->json(['response' => $rslt]);
    }

    public function EventApproved(Request $rq)
    {

        $rslt = tbsaims::where('sai', $rq->req_sai)->update([
            'ChangedBy' => Auth::user()->name,
            'status_docs' => "approved"
        ]);

        return response()->json(['response' => $rslt]);
    }

    // dev
    public function getDetailSalesInvoice(Request $request)
    {

        /**
         * @declare from request
         */
        $form = $request->dataform;

        $invoiceh = SalesInvoice::with('SalesOrder.MasterCustomers', 'MasterGoodissue')
            ->where('DocNo', 'like', '%' . $form . '%')
            ->get();

        $invoiceh_SAI = SalesInvoice::with('SalesOrder.MasterCustomers', 'MasterGoodissue')
            ->where('DocNo', 'like', '%' . $form . '%')
            ->first();

        $invoiced = SalesInvoiced::with('MaterialCode')
            ->where('DocNo', 'like', '%' . $form . '%')
            ->get();

        $tbbrg = tbbrg::whereIn('sai', [$form])->get();
        $tbPO = tbPO::whereIn('id_sai', [$form])->get();
        $total_rslt = 0;

        foreach ($tbbrg as $key => $isaims_tbbrg) {
            # code...
            $brgdt[] = $isaims_tbbrg;
            $jumlah = $this->convert_to_number(intval($isaims_tbbrg['jumlah'] * $isaims_tbbrg['harga']));
            $total_rslt = $total_rslt + ($isaims_tbbrg['jumlah'] * $isaims_tbbrg['harga']);
            $ppn = intval($total_rslt * 10) / 100;
            $total_akhir = intval($total_rslt + $ppn);

            $tr = Terbilang::make($total_akhir, ' rupiah', '');
        }

        $KOP = new SalesInvoice();
        $KOP->setConnection('KOP_sync');
        $NPWP = $KOP->with('SalesOrder.MasterCustomers', 'MasterGoodissue')
            ->where('DocNo', $invoiceh_SAI->DocNo)->first()->SalesOrder->MasterCustomers->TaxNumber;

        $Tanggal = Carbon::parse((string) $invoiceh_SAI->DocDate)
            ->addDays($invoiceh_SAI->TOP)
            ->locale('id')
            ->isoFormat('DD MMMM YYYY', 'Do MMMM');

        $CreateDate = Carbon::parse((string) $invoiceh_SAI->DocDate)
            ->locale('id')
            ->isoFormat('DD MMMM YYYY', 'Do MMMM');

        return response()->json([
            'tb_po' => $tbPO,
            'invoiceh' => $invoiceh, 'terbilang' => $tr,
            'Tanggal_jatuh_tempo' => $Tanggal,
            'Tanggal' => $CreateDate,
            'npwp_customer' => $NPWP,
            'total_akhir' => $total_akhir, 'ppn' => $ppn,
            'result_cost' => $total_rslt, 'invoiced' => $invoiced,
            'jumlah' => $jumlah, 'isaims_tbbrg' => $brgdt
        ]);
    }

    function convert_to_number($rupiah)
    {
        return intval(preg_replace("/,.*|[^0-9]/", '', $rupiah));
    }

    public function dtableSAIMANUAL(Request $request)
    {

        if (!empty($request->td)) {
            $prk = DB::table('tb_saim')
                ->whereBetween('ChangedDate', array($request->fd, $request->td))->get();
        } else {
            $prk = tbsaims::get();
        }

        if ($request->ajax()) {

            return DataTables::of($prk)
                ->editColumn('sai', function ($dt) {
                    $btns = "<span class='badge badge-primary' style='font-size:13px'>" . strtoupper($dt->sai) . "</span>";
                    return $btns;
                })->editColumn('NamaCus', function ($dt) {
                    return strtoupper($dt->NamaCus);
                })->editColumn('ApprovedBy', function ($dt) {
                    return $dt->ApprovedBy;
                })->editColumn('status_docs', function ($dt) {

                    $btn = '';
                    if ($dt->status_docs == "open") {

                        $btn .= "<span class='badge badge-primary justify-content-center' style='font-size:13.5px;text-align:center'><center>" . strtoupper($dt->status_docs) . "</center></span>";
                    }

                    if ($dt->status_docs == "approved") {
                        $btn .= "<span class='badge badge-success justify-content-center' style='font-size:13.5px;text-align:center'><center>" . strtoupper($dt->status_docs) . "</center></span>";
                    }

                    if ($dt->status_docs == "dissaproved") {
                        $btn .= "<span class='badge badge-danger justify-content-center' style='font-size:13.5px;text-align:center'><center>" . strtoupper($dt->status_docs) . "</center></span>";
                    }

                    return $btn;
                })->addColumn('btn', function ($row) {
                    $btn = '';

                    $btn .= "<button class='btn btn-sm btn-success' id='sai_mPREVIEW' data-id='" . $row->sai . "'>Preview</button></div>";
                    // $btn = "<button class='btn btn-success' id='saim_result' data-id='".$row->DocNo."'>Preview</button></div>";

                    return $btn;
                })
                // ->filter(function ($instance) use ($request) {
                //     if ($request->has('start')) {
                //         $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                //             return Str::contains($row['created_at'], $request->get('start')) ? true : false;
                //         });
                //     }

                //     if ($request->has('end')) {
                //         $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                //             return Str::contains($row['updated_at'], $request->get('end')) ? true : false;
                //         });
                //     }

                // })
                ->rawColumns([
                    'sai', 'NamaCus', 'ApprovedBy', 'status_docs', 'btn',
                ])
                ->escapeColumns()->make(true);
        }
    }

    public function PUIRVK(Request $request)
    {

        if (!empty($request->docnox)) {
            $Salesinvoice = purchaseInvoiceh::where('Information', 'like', '%Belum%')
                ->where('Status', 'PRINTED')
                ->orWhere('Information', 'like', '%Blm%')
                ->whereIn('TaxStatus', ['No', 'Exclude'])
                ->orWhere('Taxno', '0000000000000')
                ->orWhere('Taxno', '-')
                ->orWhere('Taxno', ' ')
                ->orWhere('Taxno', '_')
                ->whereNull('SupplierInvNo')
                ->whereYear('DocDate', $request->docnox)->get();
        } else {
            $Salesinvoice = purchaseInvoiceh::limit(500)->get();
        }

        if ($request->ajax()) {
            // dev
            return DataTables::of($Salesinvoice)
                ->editColumn('DocNo', function ($dt) {
                    $btn = "<span class='badge badge-success' style='font-size:13px'>" . strtoupper($dt->DocNo) . "</span>";

                    return $btn;
                })->editColumn('Taxno', function ($dt) {
                    return strtoupper($dt->TaxNo);
                })->editColumn('SupplierInvNo', function ($dt) {
                    return strtoupper($dt->SupplierInvNo);
                })->addColumn('pui_i', function ($row) {

                    $btn = "<button class='btn btn-success' id='saim_pui_result' data-id='" . $row->DocNo . "'>Pilih</button></div>";

                    return $btn;
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->has('docnox')) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            return Str::contains($row['DocDate'], $request->get('docnox')) ? true : false;
                        });
                    }
                })
                ->rawColumns([
                    'DocNo', 'pui_i', 'Taxno', 'SupplierInvNo'
                ])
                ->escapeColumns()->make(true);
        }
    }

    public function __getDetailIDGR(Request $request)
    {

        $production_relations = tbbrg::orderby('sai', 'DESC')->whereIn('sai', [$request->wo_id])->get();
        foreach ($production_relations as $dfsl) {
            # code...
            $p_read[] = $dfsl;
        }

        return response()->json(['p_read' => isset($p_read) ? $p_read : []]);
    }

    public function __getDetailIDGR_only(Request $request)
    {

        $KOP = new SalesInvoiced();
        $KOP->setConnection('KOP_sync');
        $nama_brg = $KOP->with('_MethodstaticMaterialCode')
            ->where('DocNo', '=', $request->wo_id)
            ->first();

        return response()->json(['p_read' => isset($nama_brg) ? $nama_brg : []]);
    }

    public function __getDataPO(Request $request)
    {

        $production_relations = tbPO::orderby('id_sai', 'DESC')->whereIn('id_sai', [$request->wo_id])->get();
        foreach ($production_relations as $dfsl) {
            # code...
            $p_read[] = $dfsl;
        }
        return response()->json(['p_read' => isset($p_read) ? $p_read : []]);
    }

    public function create(User $model)
    {
        $user = User::all();
        return view('saims.create', compact('user'));
    }

    public function edit($id, $sai)
    {

        $KOP = new SalesInvoiced();
        $KOP->setConnection('KOP_sync');
        $saim_sai = $KOP->with('mcode')
            ->where('DocNo', $sai)->first();
        $saims = tbsaims::find($id);
        $tbbrg = tbbrg::where('sai', $sai)->first();
        $saim_live = SalesInvoice::with('SalesOrder.MasterCustomers', 'MasterGoodissue')
            ->where('DocNo', $sai)->first();

        $saimd_live = SalesInvoiced::with('mcode')
            ->where('DocNo', $sai)->get();
        return view('saims.edit', compact('tbbrg', 'saims', 'saim_sai', 'saim_live', 'saimd_live'));
    }
}