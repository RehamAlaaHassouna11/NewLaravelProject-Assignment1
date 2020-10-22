<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($l=0; $l<50; $l++){
//            \Illuminate\Support\Facades\DB::table('customers')->insert([
//                'Phone'=>'Phone:'.$l
//            ]);
//        }

        factory(\App\Customer::class,7)->create();

    }
}
