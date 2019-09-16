<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOzekimessageoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ozekimessageouts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('sender');
            $table->string('receiver');
            $table->string('msg');
            $table->string('senttime');
            $table->string('receivedtime');
            $table->string('status');
            $table->string('msgtype');
            $table->string('operator');
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
        Schema::dropIfExists('ozekimessageouts');
    }
}
