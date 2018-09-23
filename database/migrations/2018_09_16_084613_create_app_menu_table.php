<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level')->default(0);
            // $table->integer('parent_id')->nullable()->unsigned();
            $table->integer('parent_id')->nullable();
            // $table->foreign('parent_id')->references('id')->on('app_menu');
            $table->string('menu');
            $table->string('link');
            $table->integer('is_published')->default(0);
            $table->integer('menu_order');
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('app_menu');
    }
}
