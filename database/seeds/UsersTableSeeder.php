<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
       'name' => 'Mr. Junk',
       'email' => 'a@gmail.com',
       'password' => bcrypt('12345678'),
       'role_id' => 1
		]);

		App\User::create([
		       'name' => 'Mr. Jenkin',
		       'email' => 'b@gmail.com',
		       'password' => bcrypt('12345678'),
		       'role_id' => 2
		]);
    }
}
