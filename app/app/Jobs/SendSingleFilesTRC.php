<?php

namespace App\Jobs;

use App\Mail\Orders;
use App\Models\SenderMaster;
use Illuminate\Bus\Queueable;
use App\Mail\TransactionMailModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendSingleFilesTRC implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $qty;
    public $size;
    public $material;
    public $jenis_kertas_gsm;
    public $jenis_kertas;
    public $component;

    public function __construct($component, $qty, $size, $material, $jenis_kertas, $jenis_kertas_gsm)
    {
        $this->qty = $qty;
        $this->size = $size;
        $this->material = $material;
        $this->component = $component;
        $this->jenis_kertas = $jenis_kertas;
        $this->jenis_kertas_gsm = $jenis_kertas_gsm;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mMail = SenderMaster::first();
        $emails = [$mMail->email_smarketing];
        Mail::to($emails)->send(new TransactionMailModel($this->component, $this->qty, $this->size, $this->material, isset($this->filename) ? $this->filename : NULL, isset($this->path) ? $this->path : NULL, isset($this->original) ? $this->original : NULL, isset($this->getMimeType) ? $this->getMimeType : NULL, $this->jenis_kertas, $this->jenis_kertas_gsm, isset($this->design) ? $this->design : NULL));
    }
}
