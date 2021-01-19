<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('full_name'); //氏名
            $table->string('name_kana'); //氏名 カナ
            $table->boolean('gender'); // 性別
            $table->tinyInteger('age');//年齢
            $table->integer('birthday');//誕生日
            $table->integer('postal_code');//郵便番号
            $table->string('address');//住所
            $table->integer('phone');//電話番号
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
        });
    }
}
