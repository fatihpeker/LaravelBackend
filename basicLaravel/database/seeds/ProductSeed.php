<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'televizyon',
            'category_id'=>1,
            'status'=>'',
            'price'=>1500,
            'stock'=>100,
            'description'=>'Deneme amaclı TV'
        ]);
    }
}
