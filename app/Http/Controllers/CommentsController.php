<?php namespace TeachMe\Http\Controllers;

use Illuminate\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use TeachMe\Entities\Ticket;
use TeachMe\Entities\TicketComments;
use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CommentsController extends Controller {

	public function submit($id, Request $request, Guard $auth)
    {

        $this->validate($request, [
            'comment'   =>  'required|max:250',
            'link'      =>  'url'
        ]);

        $comment = new TicketComments($request->only('comment', 'link'));

        $comment->user_id = $auth->id();

        $ticket = Ticket::findOrFail($id);

        $ticket->comments()->save($comment);

        session()->flash('success', 'Tu comentario fue guardado exitosamente');
        return redirect()->back();

    }

}
