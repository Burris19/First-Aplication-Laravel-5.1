<?php

/**
 * Created by PhpStorm.
 * User: julian
 * Date: 11/01/16
 * Time: 12:03 AM.
 */
use TeachMe\Entities\User;
use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
        ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([
            'name' => 'Julian Hernandez',
            'email' => 'admina@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
