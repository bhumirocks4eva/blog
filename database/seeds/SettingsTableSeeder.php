<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name'=> 'WoW Blog',
            'address'=>'Biratnagar - 01, Nepal',
            'contact_no'=>'421246',
            'contact_email'=>'wow@gmail.com'

        ]);
    }
}
