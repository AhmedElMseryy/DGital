<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email' => 'ahmedelmsery131@gmail.com'], [
            'name' => 'DGital',
            'address' => 'New Cairo',
            'phone' => '01154665843',
        ]);
    }
}
