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
            $table->string('image', 255);
            $table->string('primary_type', 30);
            $table->string('secondary_type', 30)->nullable();
            $table->tinyInteger('order')->unsigned();
            $table->string('height', 10);
            $table->string('weight', 10);
            $table->string('species', 50);
            $table->boolean('caught')->default(false);
            $table->string('gender', 2)->nullable();
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
