<?php

namespace App\Http\Controllers\packlane;

use App\Message;
use App\Models\Messages;
use App\Lib\PusherFactory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function postSendMessage(Request $request)
    {
        if(!$request->to_user || !$request->message) {
            return;
        }
        $message = new Messages();
        $message->from_user = Auth::user()->id;
        $message->to_user = $request->to_user;
        $message->content = $request->message;
        $message->save();
        // prepare some data to send with the response
        $message->dateTimeStr = date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString()));
        $message->dateHumanReadable = $message->created_at->diffForHumans();
        $message->fromUserName = $message->fromUser->name;
        $message->from_user_id = Auth::user()->id;
        $message->toUserName = $message->toUser->name;
        $message->to_user_id = $request->to_user;
        PusherFactory::make()->trigger('chat', 'send', ['data' => $message]);
        return response()->json(['state' => 1, 'data' => $message]);
    }

    public function getOldMessages(Request $request)
    {
        if(!$request->old_message_id || !$request->to_user)
            return;
        $message = Messages::find($request->old_message_id);
        $lastMessages = Messages::where(function($query) use ($request, $message) {
            $query->where('from_user', Auth::user()->id)
                ->where('to_user', $request->to_user)
                ->where('created_at', '<', $message->created_at);
        })
            ->orWhere(function ($query) use ($request, $message) {
            $query->where('from_user', $request->to_user)
                ->where('to_user', Auth::user()->id)
                ->where('created_at', '<', $message->created_at);
        })
            ->orderBy('created_at', 'ASC')->limit(10)->get();
        $return = [];
        if($lastMessages->count() > 0) {
            foreach ($lastMessages as $message) {
                $return[] = view('chat-box.message-lines')->with('message', $message)->render();
            }
            PusherFactory::make()->trigger('chat', 'oldMsgs', ['to_user' => $request->to_user, 'data' => $return]);
        }
        return response()->json(['state' => 1, 'data' => $return]);
    }

    /**
     * getLoadLatestMessages
     *
     *
     * @param Request $request
     */
    public function getLoadLatestMessages(Request $request)
    {
        if(!$request->user_id) {
            return;
        }

        $messages = Messages::where(function($query) use ($request) {
            $query->where('from_user', Auth::user()->id)->where('to_user', $request->user_id);
        })->orWhere(function ($query) use ($request) {
            $query->where('from_user', $request->user_id)->where('to_user', Auth::user()->id);
        })->orderBy('created_at', 'ASC')->limit(10)->get();

        $return = [];

        foreach ($messages as $message) {

            $return[] = view('message-line')->with('message', $message)->render();
        }


        return response()->json(['state' => 1, 'messages' => $return]);
    }
}