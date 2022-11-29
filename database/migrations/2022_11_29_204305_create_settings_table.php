<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('name');
            $table->integer('time_check');
            $table->integer('count_pages');
            $table->boolean('check_ideal');
            $table->text('text_ideal');
            $table->boolean('check_olx');
            $table->text('text_olx');
            $table->boolean('check_fb');
            $table->text('text_fb');
            $table->text('notify_from');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
