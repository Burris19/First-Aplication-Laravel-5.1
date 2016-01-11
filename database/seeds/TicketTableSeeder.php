<?php

/**
 * Created by PhpStorm.
 * User: julian
 * Date: 11/01/16
 * Time: 01:33 AM.
 */
use TeachMe\Entities\Ticket;
use Faker\Generator;

class TicketTableSeeder extends BaseSeeder
{
    protected $total = 250;

    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'title' => $faker->sentence(),
            'status' => $faker->randomElement(['open', 'open', 'closed']),
//            'user_id' => $this->createFrom('UserTableSeeder')->id
            'user_id' => $this->getRandom('User')->id,
        ];
    }
}
