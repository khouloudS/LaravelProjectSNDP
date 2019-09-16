<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('phone');
            $table->string('login');
            $table->string('passe');
            $table->integer('station_id')->unsigned();

            $table->foreign('station_id')
                ->references('id')
                ->on('stations')
                ->onDelete('cascade');

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
        Schema::dropIfExists('managers');
    }
}
