<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => '',
                'information' => 'お客様を大切にしております。',
                'filename' => 'sample1.jpg',
                'is_selling' => true    
            ],
            [
                'owner_id' => 2,
                'name' => '',
                'information' => 'お客様を大切にしております。',
                'filename' => 'sample2.jpg',
                'is_selling' => true    
            ],
            ]);
    }
}
