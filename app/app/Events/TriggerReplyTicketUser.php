<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TriggerReplyTicketUser implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $notification;
    public $data_user = [];
    public $ticket = [];
    public $comment = [];
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($notify, $data_users, $ticket, $comment)
    {
        $this->notification = $notify;
        $this->ticket = $ticket;
        $this->comment = $comment;
        $this->data_user = $data_users;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['re-kop-ticketing'];
    }

    public function broadcastAs()
    {
        return 'received-reply-ticketing';
    }
}
