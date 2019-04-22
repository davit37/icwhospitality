<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'email'=>' ask@icwhospitality.com',
            'phone_number'=>'123',
            'whatsapp_number'=>'123',
        ]);
    }
}
