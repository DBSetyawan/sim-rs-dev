<?php

namespace App\Mail;

use App\Models\Assetsuser;
use Illuminate\Support\Arr;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Orders extends Mailable
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

    public function __construct($component, $qty, $material, $size, $filenamed, $path, $getOriginalName, $getMimeType, $jenis_kertas_gsm, $jenis_kertas, $design)
    {
        $this->qty = $qty;
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

        if(isset($this->design) || !is_null($this->filename) || !is_null($this->design) || isset($this->path) || !is_null($this->path)){
            
            if (isset($this->filename) || !is_null($this->filename) || isset($this->path) || !is_null($this->path)) {

                $counter = Assetsuser::whereIn('order_to', [Auth::user()->id])->whereNotIn('finished_status', [0])->get();
                    # code...
                    $searchsComponentDesign = isset($this->design) ? $this->design : [0];

                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                        # code...
                        $namemtr[] =  array_column($this->design[$i], 'value');
                    }
                   
                $flattened = collect($namemtr)->flatten();

                for ($i=0; $i < count($this->material); $i++) { 
                    # code...
                    $material[] =  $this->material[$i];
                }

                for ($i=0; $i < count($this->qty); $i++) { 
                    # code...
                    $qty[] =  $this->qty[$i];
                }

                for ($i=0; $i < count($this->size); $i++) { 
                    # code...
                    $size[] =  $this->size[$i];
                }

                for ($i=0; $i < count($this->jenis_kertas); $i++) { 
                    # code...
                    $jenis_kertas[] =  $this->jenis_kertas[$i];
                }

                for ($i=0; $i < count($this->jenis_kertas_gsm); $i++) { 
                    # code...
                    $jenis_kertas_gsm[] =  $this->jenis_kertas_gsm[$i];
                }

                for ($i=0; $i < count($this->component); $i++) { 
                    # code...
                    $cmp[] =  $this->component[$i];
                }
                
                # code...
                $emails = $this
                ->subject('Information order - KOP (Sales Marketing)')
                ->markdown('emails.orders', [
                    'flattened' => self::trimData(array_unique($flattened->toArray())),
                    'materials' => $material,
                    'sizes' => $size,
                    'qtys' => $qty,
                    'searchs' => $searchs,
                    'counterDesigns' => $counter,
                    'jenisKrtas' => $jenis_kertas,
                    'jenisKrtasGSM' => $jenis_kertas_gsm,
                    'components' => $cmp,
                ]);

                foreach(array_unique($this->filename) as $filePath ){
                    $emails->attach(public_path().'/files/'.$filePath);
                    Assetsuser::whereIn('alias', [$filePath])->update(['finished_status' => 1]);
                }
    
                return $emails;

            } 
                else {
                    return $this
                    ->subject('Information order - KOP (Sales Marketing)')
                    ->markdown('emails.orders', [
                        'design' => $this->design,
                        'searchs' => $searchs,
                    ]
                );
            }
        } else {

            return $this
            ->subject('Information order - KOP (Sales Marketing)')
            ->markdown('emails.orders', [
                'design' => $this->design,
                'searchs' => $searchs,
            ]);
        }
     
    }
}
