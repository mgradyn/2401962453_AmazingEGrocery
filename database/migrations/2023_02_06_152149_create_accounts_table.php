<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('account_id')->nullable(false);
            $table->foreignId('role_id')->reference('role_id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('gender_id')->reference('gender_id')->on('genders')->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name', 25)->nullable(false);
            $table->string('last_name', 25)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('display_picture_link', 100)->nullable(false);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('accounts');
    }
}
