<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Ordersdocno extends Mailable
{
    use Queueable, SerializesModels;

    public $qty;
    public $size;
    public $material;
    public $jenis_kertas_gsm;
    public $jenis_kertas;
    public $design;

    public function __construct($qty, $material, $size, $jenis_kertas_gsm, $jenis_kertas, $design)
    {
        $this->qty = $qty;
        $this->size = $size;
        $this->material = $material;
        $this->jenis_kertas = $jenis_kertas;
        $this->jenis_kertas_gsm = $jenis_kertas_gsm;
        $this->design = $design;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $searchs = ['checkbox[]','w3review']; 
        if(isset($this->design)){
            foreach ($this->design as $fdes){
                $rt[] = preg_split("/\r\n|\n|\r/", $fdes['value']);
            }
            return $this
            ->subject('Information order - KOP')
            ->markdown('emails.orders', [
                'design' => $rt,
                'searchs' => $searchs,
            ]);
        }
    }
}
