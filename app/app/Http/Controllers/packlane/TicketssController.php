<?php

namespace App\Http\Controllers\packlane;

use App\Models\Ticket;
use App\Models\Category;
use App\Mailers\AppMailer;
use Faker\Extension\Helper;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class TicketssController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        $tickets = Ticket::paginate(10);
        return view('tickets.index', compact('tickets'));
    }
    
    public function create()
    {
        $categories = Category::all();
        return view('tickets.create', compact('categories'));
    }
   
    public function store(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'priority' => 'required',
            'message' => 'required'
        ]);
        $ticket = new Ticket([
            'title' => $request->input('title'),
            'user_id' => Auth::user()->id,
            'ticket_id' => strtoupper(Arr::random([uniqid()])),
            'category_id' => $request->input('category'),
            'priority' => $request->input('priority'),
            'message' => $request->input('message'),
            'status' => "Open"
        ]);
        $ticket->save();
        $mailer->sendTicketInformation(Auth::user(), $ticket);
        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
    }
    public function userTickets()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
        return view('tickets.user_tickets', compact('tickets'));
    }

    public function close($ticket_id, AppMailer $mailer)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();
        $ticket->status = "Closed";
        $ticket->save();
        $ticketOwner = $ticket->user;
        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);
        return redirect()->back()->with("status", "The ticket has been closed.");
    }

    public function show($ticket_id)
    {
        $ticket = Ticket::with('comments')->where('ticket_id', $ticket_id)->firstOrFail();

        foreach (Ticket::with('comments')->where('ticket_id', $ticket_id)->get() as $key => $value) {
            # code...
            if(!$value->comments->isEmpty()){
                $fdatxa = count($value->comments);
            }
        }

        $fdatxa = isset($fdatxa) ? $fdatxa : [];
    
        return view('tickets.show', compact('fdatxa','ticket'));
    }

}
