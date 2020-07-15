<?php

use Illuminate\Database\Seeder;
use App\Setting;


class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
          
           'blog_name' => 'Spirit',
           'phone_number' => '01159266974',
           'email' => 'heshamabdullah78@gmail.com',
           'address' => 'Giza, Egypt'
        ]);
    }
}
