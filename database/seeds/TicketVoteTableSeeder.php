<?php

/**
 * Created by PhpStorm.
 * User: julian
 * Date: 11/01/16
 * Time: 02:21 AM
 */
use TeachMe\Entities\TicketVote;
use Faker\Generator;
class TicketVoteTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new TicketVote();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id
        ];
    }

}