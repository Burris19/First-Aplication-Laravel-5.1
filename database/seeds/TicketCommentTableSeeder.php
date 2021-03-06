<?php

/**
 * Created by PhpStorm.
 * User: julian
 * Date: 11/01/16
 * Time: 02:27 AM.
 */
use TeachMe\Entities\TicketComments;
use Faker\Generator;

class TicketCommentTableSeeder extends BaseSeeder
{
    protected $total = 250;

    public function getModel()
    {
        return new TicketComments();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
            'comment' => $faker->paragraph(),
            'link' => $faker->randomElement(['', '', $faker->url]),
        ];
    }
}
