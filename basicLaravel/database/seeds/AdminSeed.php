<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name'=>'Aslı',
            'email'=>'aslı@gmail.com',
            'admin_key'=>'5k4j78h5g5h',
            'status'=>'',
            'role'=>'Yonetici',
        ]);
    }
}
