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
        $user = \App\User::create([
            'name' => 'Mahfuz Shuvo',
            'email' => 'i.maf.shuvo@gmail.com',
            'password' => bcrypt('12341234'),
        ]);

        $user->restaurant()->create([
            'name' => 'Chapata Cafe',
            'location' => 'Rupnagar, Mirpur',
        ]);

        $user->restaurant()->create([
            'name' => 'Bangaliana Bhoj',
            'location' => 'Panthapath',
        ]);

        $user->restaurant()->create([
            'name' => 'Star Kabab',
            'location' => 'Dhanmondi',
        ]);
    }

}
