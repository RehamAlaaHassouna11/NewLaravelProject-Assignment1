<?php

use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($s=0; $s<30; $s++){
//            \Illuminate\Support\Facades\DB::table('order_products')->insert([
//                'OrderID'=>'OrderID:'.$s
//            ]);
//        }

        factory(\App\Order_Product::class,12)->create();

    }
}
