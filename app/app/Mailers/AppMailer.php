<?php

namespace App\Mailers;

use App\Models\Ticket;
use Illuminate\Contracts\Mail\Mailer;
use App\Events\TriggerReplyTicketUser;
use App\Events\TriggerEventTransactionTicketing;

class AppMailer
{
    protected $mailer;
    protected $fromAddress = 'daniel.setyawan@krisanthium.com';
    protected $fromName = 'KOP - Support Ticket';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    /**
     * AppMailer constructor.
     * @param $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendTicketInformation($user, Ticket $ticket)
    {
        $this->to = $user->email;

        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

        $this->view = 'emails.info_ticket';

        $this->data = compact('user', 'ticket');
        
        event(new TriggerEventTransactionTicketing('send_ticket', $ticket->ticket_id, $ticket->title ,$user));

        return $this->deliver();

    }

    public function sendTicketComments($ticketOwner, $user, Ticket $ticket, $comment)
    {
        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
        $this->view = 'emails.ticket_comments';
        $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');

        return $this->deliver();
    }

    public function sendTicketStatusNotification($ticketOwner, Ticket $ticket)
    {
        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
        $this->view = 'emails.ticket_status';
        $this->data = compact('ticketOwner', 'ticket');
        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message){
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);

        });
    }
}