<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($k=0; $k<15; $k++){
//            \Illuminate\Support\Facades\DB::table('products')->insert([
//                'Name'=>'Product'.$k,
//                'Scale'=> $k
//
//            ]);
//        }

        factory(\App\Product::class,6)->create();

    }
}
