<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($s=0; $s<30; $s++){
//            \Illuminate\Support\Facades\DB::table('orders')->insert([
//                'CustomerID'=>'CustomerID:'.$s
//            ]);
//        }


        factory(\App\Order::class,12)->create();

    }
}
