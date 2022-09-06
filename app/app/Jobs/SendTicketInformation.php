<?php

namespace App\Jobs;

use App\Mail\Orders;
use App\Models\SenderMaster;
use Illuminate\Bus\Queueable;
use App\Mail\TransactionMailModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\TransactionTicketInformation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendTicketInformation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $user = [];
    public $ticket = [];
    public $subject;

    public function __construct($email, $user, $ticket, $subject)
    {
        $this->email = $email;
        $this->user = $user;
        $this->ticket = $ticket;
        $this->subject = $subject;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new TransactionTicketInformation($this->email, $this->user, $this->ticket, $this->subject));
    }
}
