<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('address',100);
            $table->string('neighborhood',50);
            $table->double('latitude',10,8) ->nullable();
            $table->double('longitude',10,8)->nullable();
            $table->unsignedBigInteger('fk_routes');
            $table->timestamps();
            $table->foreign('fk_routes')->references('id')->on('routes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
}
