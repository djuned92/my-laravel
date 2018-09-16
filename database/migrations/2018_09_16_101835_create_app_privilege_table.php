<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppPrivilegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_privilege', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('tm_role');
            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('app_menu');
            $table->integer('can_create')->default(0);
            $table->integer('can_read')->default(0);
            $table->integer('can_update')->default(0);
            $table->integer('can_delete')->default(0);
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_privilege');
    }
}
