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
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendMoreFilesTRC implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $qty;
    public $size;
    public $material;
    public $path;
    public $jenis_kertas_gsm;
    public $jenis_kertas;
    public $original;
    public $getMimeType;
    public $design;
    public $component;
    protected $code;
    protected $filename;

    public function __construct($code, $component, $qty, $material, $size, $filename, $path, $original, $getMimeType, $jenis_kertas_gsm, $jenis_kertas, $design)
    {
        $this->code = $code;
        $this->qty = $qty;
        $this->size = $size;
        $this->material = $material;
        $this->component = $component;
        $this->path = $path;
        $this->original = $original;
        $this->filename = $filename;
        $this->getMimeType = $getMimeType;
        $this->jenis_kertas = $jenis_kertas;
        $this->jenis_kertas_gsm = $jenis_kertas_gsm;
        $this->design = $design;
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
        Mail::to($emails)->send(new TransactionMailModel($this->code, $this->component, $this->qty, $this->size, $this->material, $this->filename, $this->path, $this->original, $this->getMimeType, $this->jenis_kertas, $this->jenis_kertas_gsm, $this->design));
    }
}
