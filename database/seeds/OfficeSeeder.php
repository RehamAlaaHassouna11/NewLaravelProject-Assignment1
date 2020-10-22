<?php

use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($s=0; $s<30; $s++){
//            \Illuminate\Support\Facades\DB::table('offices')->insert([
//                'Address1'=>'Address1:'.$s,
//                  'Address2'=>'Address2:'.$s
//            ]);
//        }

        factory(\App\Office::class,10)->create();

    }
}
