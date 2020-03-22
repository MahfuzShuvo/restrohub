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
        \App\User::create([
        	'name' => 'Mahfuz Shuvo',
        	'email' => 'i.maf.shuvo@gmail.com',
        	'password' => bcrypt('12341234'),
        ]);
    }
}
