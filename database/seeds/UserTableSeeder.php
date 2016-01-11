<?php

/**
 * Created by PhpStorm.
 * User: julian
 * Date: 11/01/16
 * Time: 12:03 AM
 */
use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $this->createAdmin();
        $this->createUsers(50);
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'Julian Hernandez',
            'email' => 'admina@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }

    public function createUsers($total)
    {
        $faker = Faker::create();

        for ($i = 1; $i <= $total; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret')
            ]);
        }
    }
}