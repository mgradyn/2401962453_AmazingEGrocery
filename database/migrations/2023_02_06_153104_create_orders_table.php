<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id')->nullable(false);
            $table->foreignId('account_id')->reference('account_id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('item_id')->reference('item_id')->on('items')->onUpdate('cascade')->onDelete('cascade');
            $table->int('price')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
