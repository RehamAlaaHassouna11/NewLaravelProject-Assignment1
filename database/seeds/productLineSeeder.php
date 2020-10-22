<?php

use Illuminate\Database\Seeder;

class productLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        for ($i=0; $i<20; $i++){
//            \Illuminate\Support\Facades\DB::table('productline')->insert([
//                'ID'=>'product-Line:'.$i,
//                'DescInText'=> $i
//            ]);
//        }

        factory(\App\Pruductline::class,10)->create();

    }
}
