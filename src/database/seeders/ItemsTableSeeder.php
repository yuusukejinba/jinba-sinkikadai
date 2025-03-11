<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
        $param = [

            'id' => '1',
            'content' => '商品A'
        ];
        DB::table('items')->insert($param);

        $param = [

        'id' => '2',
        'content' => '商品B'
        ];
        DB::table('items')->insert($param);

        $param = [

        'id' => '3',
        'content' => '商品C'
        ];
        DB::table('items')->insert($param);

    }
}