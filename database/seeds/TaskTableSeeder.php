<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // (1)レコードデータをいちいち消さなくていい文
        DB::table('tasks')->truncate(); // 全レコードを削除、自動増分のIDを0にリセット
        DB::table('tasks')->insert([  // テーブルにデータをInsert
            'title_id' => '1',
            'title' => 'Sample Title',
            'heading' => 'サンプル日本語heading',
            'due_date' => "2020-12-31",
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // (2)基本文。毎回Mysqlにてレコードの削除が必要。（mysql>truncate table テーブル名;)
        // $param = [
        //     'title_id' => '1',
        //     'title' => 'Sample Title',
        //     'heading' => 'サンプル日本語heading',
        //     'due_date' => "2020-12-31",
        //     'status' => '1',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        
        // ];
        // DB::table('tasks')->insert($param);
    }
}
