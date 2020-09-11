<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    
    public function up()
    {
        if (Schema::hasTable('contents')) {
            // テーブルが存在していればリターン
            return;
        }

        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('title_id')->unsigned();
            $table->string('heading', 200);
            $table->string('body');
            $table->integer('status')->default(1);
            $table->date('due_date')->default('2020-01-01');
            $table->timestamps();
            $table->foreign('title_id')->references('id')->on('titles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
