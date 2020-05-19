<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['role_id' => '3', 'organization_id' => '1', 'name' => 'Anjali', 'email' => 'xyz@gmail.com', 'password' => bcrypt('secret'), 'phone' => '12345', 'profile_pic' => 'anjali.jpg'],
        ]);
    }
}
