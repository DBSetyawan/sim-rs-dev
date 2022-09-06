<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TriggerEventTransactionTicketing implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $notification;
    public $data_user = [];
    public $ticket_title;
    public $ticket_id;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($notify, $ticket_id, $ticket_title, $user)
    {
        $this->notification = $notify;
        $this->ticket_id = $ticket_id;
        $this->ticket_title = $ticket_title;
        $this->data_user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['trigger-transaction-ticket'];
    }

    public function broadcastAs()
    {
        return 'received-ticketing';
    }
}
