<?php

namespace App\Mail;

use App\Models\Assetsuser;
use Illuminate\Support\Arr;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TransactionMailModel extends Mailable
{
    use Queueable, SerializesModels;

    public $qty;
    public $size;
    public $material;
    public $path;
    public $jenis_kertas_gsm;
    public $jenis_kertas;
    public $getOriginalName;
    public $getMimeType;
    public $design;
    public $component;
    protected $filename;
    protected $code;

    public function __construct($code, $component, $qty, $material, $size, $filenamed, $path, $getOriginalName, $getMimeType, $jenis_kertas_gsm, $jenis_kertas, $design)
    {
        $this->qty = $qty;
        $this->code = $code;
        $this->size = $size;
        $this->material = $material;
        $this->path = $path;
        $this->component = $component;
        $this->original = $getOriginalName;
        $this->filename = $filenamed;
        $this->mime = $getMimeType;
        $this->jenis_kertas = $jenis_kertas;
        $this->jenis_kertas_gsm = $jenis_kertas_gsm;
        $this->design = $design;
    }

    protected function __KOPMethodDuplicateArray($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
        foreach($array as $val) {
          //cari bedasarkan index-nya
            if (!in_array($val[$key], $key_array)) {
              //intialize ke index dari set value yang teridentifikasi.
                $key_array[$i] = $val[$key];
                //simpan array value
                $temp_array[$i] = $val;
            }
            $i++;
        }
      return $temp_array;
    }

    private static function trimData($data){
        if($data == null)
            return null;
     
        if(is_array($data)){
            return array_map('value', $data);
        }else return trim($data);
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $searchs = ['checkbox[]','checkbox4[]','checkbox3[]','checkbox2[]','w3review','w3review2','w3review3','w3review4']; 

        if(isset($this->component) || isset($this->design) || !is_null($this->filename) || !is_null($this->design) || isset($this->path) || !is_null($this->path)){

            // $code = isset(Assetsuser::whereIn('component', [$this->component])->first()['assets_uid']) 
            // ? Assetsuser::whereIn('component', [$this->component])->first()['assets_uid'] 
            // : Assetsuser::whereIn('definition', [$this->component])->first()['assets_uid'];
            $subjects = "Information Order #".$code = $this->code[0];$code;

            if (isset($this->filename) || !is_null($this->filename) || isset($this->path) || !is_null($this->path)) {

                $counterDesigns = Assetsuser::whereIn('order_to', [Auth::user()->id])->whereNotIn('finished_status', [0])->get();
                    # code...
                    $searchsComponentDesign = isset($this->design) ? $this->design : [0];

                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                        # code...
                        $namemtr[] =  array_column($this->design[$i], 'value');
                    }
                   
                        $flattened = collect($namemtr)->flatten();

                        for ($i=0; $i < count($this->material); $i++) { 
                            # code...
                            $dtmaterials[] =  $this->material[$i];
                        }

                        $materials = array_unique(array_values($dtmaterials));

                        for ($i=0; $i < count($this->qty); $i++) { 
                            # code...
                            $dtqtys[] =  $this->qty[$i];
                        }

                        $qtys = array_unique(array_values($dtqtys));

                        for ($i=0; $i < count($this->size); $i++) { 
                            # code...
                            $dtsizes[] =  $this->size[$i];
                        }

                        $sizes = array_unique(array_values($dtsizes));

                        for ($i=0; $i < count($this->jenis_kertas); $i++) { 
                            # code...
                            $jenisKrtas[] =  $this->jenis_kertas[$i];
                        }

                        // $jenisKrtas = array_unique(array_values($dtjnskrts));

                        for ($i=0; $i < count($this->jenis_kertas_gsm); $i++) { 
                            # code...
                            $dtjenisKrtasGSM[] =  $this->jenis_kertas_gsm[$i];
                        }

                        $jenisKrtasGSM = array_unique(array_values($dtjenisKrtasGSM));

                        // dd($jenisKrtasGSM);
                        for ($i=0; $i < count($this->component); $i++) { 
                            # code...
                            $components[] =  $this->component[$i];
                        }

                        // $components = array_unique(array_values($dtcomponents));

                        $flattened = self::trimData(array_unique($flattened->toArray()));
                        
                        $design = $this->design;

                        # code...
                        $emails = $this
                        ->subject($subjects)
                        ->view('email-sender.template-kop', compact(
                            // ->view('emails.transactionMailOrders', compact(
                            'flattened',
                            'materials',
                            'code',
                            'sizes',
                            'qtys',
                            'searchs',
                            'counterDesigns',
                            'jenisKrtas',
                            'jenisKrtasGSM',
                            'components',
                        )
                    );

                foreach(array_unique($this->filename) as $filePath ){
                    $emails->attach(public_path().'/files/'.$filePath);
                    Assetsuser::whereIn('alias', [$filePath])->update(['finished_status' => 1]);
                }
    
                return $emails;

            } 
                else {
                    return $this
                        ->subject($subjects)

                ->view('email-sender.template-kop', compact(
                        'design',
                        'code',
                        '$searchs'
                    )
                );
            }

        } 
        // else {

        //     return $this
        //     ->subject('Information order - #$code')
        //         ->view('email-sender.template-kop', compact(
        //             'design',
        //             'searchs'
        //         )
        //     );
        // }
     
    }
}
