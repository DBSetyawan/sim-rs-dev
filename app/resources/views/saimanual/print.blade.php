<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
    </style>
    <title>Sales Invoice</title>
</head>

<body>
    <table cellpadding="0" cellspacing="0" width='100%'>
        <tr>
            <td width='70%'><b>
                    <font style='font-family: sans-serif;font-size: 14px;'></font>
                </b></td>
            <td width='53%' colspan='7' align="center" rowspan="2"><b>
                    <font style='font-family: sans-serif;font-size: 22px;'><span
                            style="position: absolute;left: 519px;top:-19px;" id="invoice"> INVOICE</span></font>
                </b></td>
        </tr>
        <tr>
            <td width='70%'><b>
                    <font style='font-family: sans-serif;font-size: 14px;'>PT. Krisanthium Offset Printing</font>
                </b></td>
            <td width='30%' align='center' colspan='3'><b>
                    <font style='font-family: sans-serif;font-size: 14px;'></font>
                </b></td>
        </tr>
        <tr>
            <td width='50%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Jl. RUNGKUT INDUSTRI III NO. 19</font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'>No Invoice</font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='25%'>
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $detailrows_sai->sai }}</font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Rungkut Menanggal - Gunung Anyar, Surabaya</font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Tanggal</font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='1%' style="white-space:nowrap;">
                <font style='font-family: sans-serif;font-size: 14px;'> {{ \Carbon\Carbon::parse($todatetimeStringcreatedSAI)
                        ->locale('id')
                            ->isoFormat('DD MMMM YYYY', 'Do MMMM') }}</font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>NPWP : 01.211.057.3-631.000</font>
            </td><br>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>ID Pelanggan</font>
            </td>
            <td width='2%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='10%'>
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $detailrows_sai->KodeCus }}</font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>+62 31 8438182</font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>No Surat Jalan</font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'> {{ $dt_live_sim_GID->GIDocNo }}</font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'><b>Kepada</b></font>
            </td>
            <td width='30%' valign='top'>
                <font style='font-family: sans-serif;font-size: 14px;'>No PO</font>
            </td>
            <td width='1%' valign='top' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='1%'>
                {{-- @foreach ($PO as $item) --}}
                <font style='font-family: sans-serif;font-size: 14px;'> {!! implode(",<br/>\n", $PO )!!}</font>
                {{-- @endforeach --}}
            </td>
        </tr>
        <tr>
            <td width='50%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='2%' align='center'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
        </tr>
        <tr>
            {{-- this comment label Kepada bold texts --}}
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>No SO</font>
            </td>
            <td width='2%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='10%' style="white-space:nowrap;" rowspan="1">
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $no_SOD }}</font>
            </td>
        </tr>
        <tr>
            <td width='54%' style=" padding: 1px 0;">
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $detailrows_sai->NamaCus }}</font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Tax</font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='10%'>
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $TAX }}</font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $customers }} </font>
            </td>
            <td width='38%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Jangka Waktu Pembayaran</font>
            </td>
            <td width='2%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'>
                    {{ $TOP }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hari
                </font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>NPWP : {{ $npwp }}</font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Tanggal Jatuh Tempo</font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'>:</font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'> {{ $tanggal_jatuh_tempo }} </font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
        </tr>
        <tr>
            <td width='54%' style="white-space: nowrap;">
                <font style='font-family: sans-serif;font-size: 14px;'><br></font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'><b>Pengiriman Ke :</b></font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>UP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: AP HD</font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $ship_customer }}</font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Telp &nbsp;&nbsp;&nbsp; : {{ $phone_cs .'&'. $fax_cs }}</font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'>{{ $ship }}</font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
        </tr>
        <tr>
            <td width='54%'>
                <font style='font-family: sans-serif;font-size: 14px;'>Email &nbsp;&nbsp;: {{ $emailcs }} </font>
            </td>
            <td width='30%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='1%' align='left'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
            <td width='1%'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
        </tr>
    </table>

    <table rules="rows" width='100%' height='100%'>
        <tr>
            <th align='center' width='3%'><b>
                    <font style='font-family: sans-serif;font-size: 13px;'>No</font>
                </b></th>
            <th align='center' width='12%'><b>
                    <font style='font-family: sans-serif;font-size: 13px;'>PO Item</font>
                </b></th>
            <th align='center' width='5%'><b>
                    <font style='font-family: sans-serif;font-size: 13px;'>Qty</font>
                </b></th>
                <th align='center' width='22%'><b>
                    <font style='font-family: sans-serif;font-size: 13px;'>Satuan Nama Barang</font>
                </b></th>
            <th align='left' width='25%'><b>
                    <font style='font-family: sans-serif;font-size: 13px;'></font>
                </b></th>
            <th align='center' width='16%'><b>
                    <font style='font-family: sans-serif;font-size: 13px;'>Harga Satuan</font>
                </b></th>
            <th align='center' width='15%'><b>
                    <font style='font-family: sans-serif;font-size: 13px;'>Jumlah</font>
                </b></th>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tr>
    </table>
    <table cellpadding="1" cellspacing="0" width='100%' height='100%' style="padding-right: 1%;line-height:18px">
        @foreach ($brgdt as $item)
        <tr>
            <td align='center' style='border-bottom: 1px dotted #000000;border-radius: 50%;' width='6%' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{ $loop->iteration }}</font>
            </td>
            <td align='center' style='border-bottom: 1px dotted  #000000;border-radius: 50%;' width='15%' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{ $item->jumlah }}</font>
            </td>
            <td align='center' style='border-bottom: 1px dotted  #000000;border-radius: 50%;' width='10%' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{ __('1000') }}</font>
            </td>
            <td align='left' style='border-bottom: 1px dotted  #000000;border-radius: 50%;' width='69%' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'> {{ $item->nama }}</font>
            </td>
            <td align='right' style='border-bottom: 1px dotted #000000 ;border-radius: 50%;' width='19%' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{ number_format($item->harga, 1, ".",",") }}</font>
            </td>
            <td align='right' style='border-bottom: 1px dotted #000000;border-radius: 50%;' width='23%' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{ number_format($item->harga * $item->jumlah, 1, ".",",") }}</font>
            </td>
        </tr>
        @endforeach

        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='center' colspan='7'>
                <font style='font-family: sans-serif;font-size: 14px;'>&nbsp;</font>
            </td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" width='100%' rules="rows">
    </table>
    <table cellpadding="0" cellspacing="0" width='100%' border='0' style="table-layout: fixed">
        <tr>
            <td colspan='9' style='border: 1px solid #000;'>
                <font style='font-family: sans-serif;font-size: 14px;'></font>
            </td>
        </tr>
        <tr>
            <td align='left' valign='top'>Terbilang : &nbsp;&nbsp;&nbsp;<font
                    style='font-family: sans-serif;font-size: 13px;position: absolute;width:320px'> {{ \Str::title($tr) }} </font>
            </td>
            <td align='left' width='20%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>JUMLAH</b></font>
            </td>
            <td align='right' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>:</font>
            </td>
            <td align='left' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='right' width='25%'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{ number_format($total_akhir, 1,".",",") }}</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>DISCOUNT</b></font>
            </td>
            <td align='right' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>:</font>
            </td>
            <td align='center' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'> </font>
            </td>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='right' width='25%'>
                <font style='font-family: sans-serif;font-size: 13px;'>.00</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='left' width='25%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>Down Payment</b></font>
            </td>
            <td align='right' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>:</font>
            </td>
            <td align='center' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'> </font>
            </td>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='right' width='25%'>
                <font style='font-family: sans-serif;font-size: 13px;'>.00</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>PPh (IDR)</b></font>
            </td>
            <td align='right' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>:</font>
            </td>
            <td align='center' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'> </font>
            </td>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='right' width='25%'>
                <font style='font-family: sans-serif;font-size: 13px;'>.00</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>PPN (IDR)</b></font>
            </td>
            <td align='right' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>:</font>
            </td>
            <td align='center' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'> </font>
            </td>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='right' width='25%'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{ number_format($ppn,1 ,".",",") }}</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>TOTAL</b></font>
            </td>
            <td align='right' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>:</font>
            </td>
            <td align='center' valign='top'>
                <font style='font-family: sans-serif;font-size: 13px;'> </font>
            </td>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'><b>&nbsp;</b></font>
            </td>
            <td align='right' width='25%'>
                <font style='font-family: sans-serif;font-size: 13px;'>{{number_format($total_akhir, 1,".",",") }}</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='100%'>
                <font style='font-family: sans-serif;font-size: 13px;'>Pembayaran mohon ditransfer ke</font>
            </td>
            <td align='left' width='23%'>
                <font style='font-family: sans-serif;font-size: 13px;'>Surabaya</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='5%'>
                <font style='font-family: sans-serif;font-size: 13px;'>PT. Krisanthium Offset Printing</font>
            </td>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'>Hormat Kami, </font>
            </td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" width='100%' border='0'>
        <tr>
            <td align='left' width='100%' valign='top' colspan='5'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
        </tr>
        <tr>
            <td align='left' valign='top' colspan='4'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' width='41%'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
        </tr>
        <tr>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'>Bank</font>
            </td>
            <td align='left' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;:&nbsp;</font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;&nbsp;BCA</font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'>No Rekening</font>
            </td>
            <td align='left' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;:&nbsp;</font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;
                    8.220.981.038 </font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'>Alamat</font>
            </td>
            <td align='left' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;:&nbsp;</font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;&nbsp;Kendangsari Industri No 2, Surabaya
                </font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='15%'>
                <font style='font-family: sans-serif;font-size: 13px;'><br /></font>
            </td>
            <td align='left' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;</font>
            </td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" width='100%' border='0'>
        <tr>
            <td align='left' width='62.05%'>
                <font style='font-family: sans-serif;font-size: 13px;'>QF. KOP-FI-7.1.3-001 REV:00</font>
            </td>
            <td align='left' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;&nbsp;(Ratna Yani Astuty)</font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='62.05%'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;&nbsp;Telp (031) 8438182</font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;</font>
            </td>
        </tr>
        <tr>
            <td align='left' width='62.05%'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' width='1%'>
                <font style='font-family: sans-serif;font-size: 13px;'></font>
            </td>
            <td align='left' colspan='2' style="white-space: nowrap">
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;&nbsp;Email : ratna.astuty@krisanthium.com
                </font>
            </td>
            <td align='left' colspan='3'>
                <font style='font-family: sans-serif;font-size: 13px;'>&nbsp;</font>
            </td>
        </tr>
    </table>
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    @stack('js')
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>
</html>
