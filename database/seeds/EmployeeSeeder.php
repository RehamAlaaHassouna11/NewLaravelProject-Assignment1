<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($s=0; $s<30; $s++){
//            \Illuminate\Support\Facades\DB::table('employees')->insert([
//                'OfficeCode'=>'OfficeCode:'.$s
//            ]);
//        }

        factory(\App\Employee::class,8)->create();
    }
}
