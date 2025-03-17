<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelsTableSeeder extends Seeder
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
            'content' => '自社サイト'
        ];
        DB::table('channels')->insert($param);

        $param = [

            'id' => '2',
            'content' => '検索エンジン'
        ];
        DB::table('channels')->insert($param);

        $param = [

            'id' => '3',
            'content' => 'SNS'
        ];
        DB::table('channels')->insert($param);

        $param = [

            'id' => '4',
            'content' => 'テレビ・新聞'
        ];
        DB::table('channels')->insert($param);

        $param = [

            'id' => '5',
            'content' => '友人・知人'
        ];
        DB::table('channels')->insert($param);
    }
}
