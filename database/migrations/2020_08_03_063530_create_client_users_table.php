<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_users', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->primary('id');
            $table->tinyIncrements('plan_id',4);
            $table->varchar('name'); //名前(ニックネーム可)
            $table->increments('age')->nullable(); //年齢
            $table->varchar('gender')->nullable(); //性別
            $table->varchar('hobby',70)->nullable(); //趣味
            $table->varchar('birthplace',20)->nullable(); //出身地
            $table->varchar('email',128)->unique(); //メールアドレス
            $table->varchar('password',60)->unique(); //パスワード
            $table->varchar('face_image_path')->nullable(); //顔写真(イラスト可)
            $table->varchar('user_identification'); //ユーザー識別
            $table->varchar('aq_confirmation')->nullable(); //実績資格
            $table->varchar('Qualification_photo_path')->nullable(); //資格証明写真
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
        Schema::dropIfExists('client_users');
    }
}
