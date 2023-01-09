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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 80);
            $table->text('description', 80)->nullable();
            $table->string('thumb', 250)->nullable();
            $table->float('price', 8,2)->nullable();
            $table->string('series', 50)->nullable();
            $table->string('sale_date', 10)->nullable();
            $table->string('type', 25)->nullable();
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
        Schema::dropIfExists('comics');
    }
};
