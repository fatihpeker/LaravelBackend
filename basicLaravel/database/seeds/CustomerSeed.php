<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name'=>'Fatih',
            'email'=>'fth@gmail.com',
            'password'=>'111111',
            'status'=>'',
            'phone'=>'05555555555'
        ]);
    }
}
