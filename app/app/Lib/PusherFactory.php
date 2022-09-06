<?php
namespace App\Lib;
use Pusher\Pusher;
class PusherFactory
{
    public static function make()
    {
        return new Pusher(
            env("PUSHER_APP_KEY_CHAT"), // public key
            env("PUSHER_APP_SECRET_CHAT"), // Secret
            env("PUSHER_APP_ID_CHAT"), // App_id
            array(
                'cluster' => env("PUSHER_APP_CLUSTER_CHAT"), // Cluster
                'encrypted' => true,
            )
        );
    }
}