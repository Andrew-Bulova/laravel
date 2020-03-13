<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            'fire_risk',
            'automated_process_control',
            'flammable_liquids',
            'gas_station',
            'cars_sale_and_exhibition',
            'high_shelving',
            'permanent_workplace',
            'ventilation',
            'smoke_protection_system',
            'distance_from_far_entry_point_less_then_25m',
            'corridors_length_less_then_15m',
            'people_in_building',
            'people_more_then_50',
            'people_more_then_10',
            'night_stay',
            'round_the_clock_stay',
        ];

        foreach ($attributes as $attribute) {
            DB::table('attributes')->insert([
                'attribute' => $attribute
            ]);
        }
    }
}
