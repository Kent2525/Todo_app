<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // // (1)レコードデータをいちいち消さなくていい文
                // DB::table('contents')->truncate(); // 全レコードを削除、自動増分のIDを0にリセット
                // DB::table('contents')->insert([  // テーブルにデータをInsert
                //     [
                //         'title_id' => '1',
                //         'heading' => 'サンプル日本語heading',
                //         'body' => 'body1',
                //         'status' => '1',
                //         'due_date' => "2020-12-31",
                //         'created_at' => date('Y-m-d H:i:s'),
                //         'updated_at' => date('Y-m-d H:i:s'),
                //       ],
                //       [
                //         'title_id' => '2',
                //         'heading' => 'サンプル日本語heading2',
                //         'body' => 'body2',
                //         'status' => '1',
                //         'due_date' => "2020-12-31",
                //         'created_at' => date('Y-m-d H:i:s'),
                //         'updated_at' => date('Y-m-d H:i:s'),
                //       ],
                //       [
                //         'title_id' => '3',
                //         'heading' => 'サンプル日本語heading3',
                //         'body' => 'body3',
                //         'status' => '2',
                //         'due_date' => "2020-12-31",
                //         'created_at' => date('Y-m-d H:i:s'),
                //         'updated_at' => date('Y-m-d H:i:s'),
                //       ],
                //     ]);
        
                // (2)基本文。毎回Mysqlにてレコードの削除が必要。（mysql>truncate table テーブル名;)
                // $param = [
                    // 'title_id' => '1',
                    // 'title' => 'Sample Title',
                    // 'heading' => 'サンプル日本語heading',
                    // 'due_date' => "2020-12-31",
                    // 'status' => '1',
                    // 'created_at' => date('Y-m-d H:i:s'),
                    // 'updated_at' => date('Y-m-d H:i:s'),
                
                // ];
                // DB::table('tasks')->insert($param);//
    }
}
