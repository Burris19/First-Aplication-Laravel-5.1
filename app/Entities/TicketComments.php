<?php

namespace TeachMe\Entities;

class TicketComments extends Entity
{

    protected $fillable = [
        'comment',
        'link'
    ];

    public function ticket()
    {

        return $this->belongsTo(Ticket::getClass());

    }

    public function user()
    {

        return $this->belongsTo(User::getClass());

    }

}
