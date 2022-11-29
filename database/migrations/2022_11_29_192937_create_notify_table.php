<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notify', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('name');
            $table->boolean('status');
            $table->date('create_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notify');
    }
}
