<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('type_1', 30);
            $table->string('type_2', 30)->nullable();
            $table->integer('total');
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('sp_atk');
            $table->integer('sp_def');
            $table->integer('speed');
            $table->integer('generation');
            $table->boolean('legendary')->default(false);
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
        Schema::dropIfExists('pokemon');
    }
};
