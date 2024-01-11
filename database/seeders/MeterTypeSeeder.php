<?php

namespace Database\Seeders;

use App\Models\MeterType;
use Illuminate\Database\Seeder;

class MeterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MeterType::firstOrCreate([
            'type' => 'Electricity',
        ]);
        MeterType::firstOrCreate([
            'type' => 'Gas',
        ]);
        MeterType::firstOrCreate([
            'type' => 'Water',
        ]);
        MeterType::firstOrCreate([
            'type' => 'Internet',
        ]);
    }
}
