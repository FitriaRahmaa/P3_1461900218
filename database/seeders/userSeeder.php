<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new users();
        $user->name = "Admin";
        $user->username = "admin";
        $user->password = "admin";
        $user->save();
    }
}
