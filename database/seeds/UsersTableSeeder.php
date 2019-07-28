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
        $user= App\User::create([
        	'name'=>'admin',
        	'email'=>'admin@admin.com',
        	'password'=>bcrypt('password'),
            'admin'=> 1
        ]);

        App\Profile::create([
            'user_id'=> $user->id,
            'avatar'=>'uploads/avatars/1.jpg',
            'about'=>'Hi, this is an default admin account made during the installation of the software.',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'

        ]);
    }
}
