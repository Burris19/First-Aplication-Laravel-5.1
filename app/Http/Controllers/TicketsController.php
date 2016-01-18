<?php namespace TeachMe\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use TeachMe\Entities\Ticket;
use TeachMe\Entities\TicketComments;
use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;
use Illuminate\Auth\Guard;

use Illuminate\Http\Request;

class TicketsController extends Controller {

	public function latest()
    {

        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate();
        return view('tickets/list', compact('tickets'));

    }

    public function popular()
    {

        return view('tickets/list');

    }

    public function open()
    {

        return view('tickets/list');

    }

    public function closed()
    {

        return view('tickets/list');

    }

    public function details($id, Guard $auth)
    {
        $ticket = Ticket::findOrFail($id);
//        $comments = TicketComments::select('ticket_comments.*', 'users.name')
//            ->join('users', 'ticket_comments.user_id', '=', 'users.id')
//            ->where('ticket_id', $id)
//            ->get();

        //obtener el id del usuario logueado
//        $user = Auth::user();
//        $user = auth()->user();
        $user = $auth->user();


        return view('tickets/details', compact('ticket', 'user'));

    }

    public function create()
    {

        return view('tickets.create');

    }


    public function store(Request $request, Guard $auth)
    {
        $this->validate($request, [
            'title' => 'required|max:120'
        ]);

//        $ticket = new Ticket();
//        $ticket->title      =   $request->get('title');
//        $ticket->status     =   'open';
//        $ticket->user_id    =   $auth->user()->id;
//        $ticket->save();

        $ticket = $auth->user()->tickets()->create([

            'title'     => $request->get('title'),
            'status'    => 'open'
        ]);

        return Redirect::route('tickets.details', $ticket->id );


    }



}
