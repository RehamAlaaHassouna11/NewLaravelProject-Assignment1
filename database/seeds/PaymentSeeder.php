<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        for ($v=0; $v<19; $v++){
//            \Illuminate\Support\Facades\DB::table('payments')->insert([
//                'CheckNum'=>'payments'.$v,
//                'CustomerID'=> $v,
//                'Amount'=> $v,
//
//            ]);
//        }

        factory(\App\Payment::class,7)->create();

    }
}
