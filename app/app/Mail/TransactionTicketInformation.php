<?php

namespace App\Mail;

use App\Models\Assetsuser;
use Illuminate\Support\Arr;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TransactionTicketInformation extends Mailable
{
    use Queueable, SerializesModels;

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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $user = $this->user;
        $ticket = $this->ticket;
        # code...
        $this->subject($this->subject)
            ->view('emails.info_ticket', compact(
                'user',
                'ticket',
            )
        );
     
    }
}
