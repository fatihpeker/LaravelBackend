<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BasketSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basket')->insert([
            'customer_id'=>1,
            'product_id'=>1,
        ]);
    }
}
