<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('review',70); //クチコミ 70文字に制限
            $table->unsignedBigInteger('user_id'); //user_idの外部キー
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');//user_idの外部キーの制約
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_reviews');
    }
}
