<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            '1' =>'Action',
            '2' =>'Nature',
            '3' =>'Food',
            '5' =>'City',
            '6' =>'Village',
            '7' =>'Aroma',
            '8' =>'Flowers',
            '11' =>'Lifestyle',
        ];
        foreach ($categories as $id=>$category)
        \Illuminate\Support\Facades\DB::table('categories')->insert(['id'=>$id, 'name'=>$category]);
    }
}
