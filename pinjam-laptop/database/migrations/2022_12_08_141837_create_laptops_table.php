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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('name');
            $table->string('rayon');
            $table->string('purposes');
            $table->date('date');
            $table->date('return_date')->nullable();
            $table->string('teacher');
            $table->string('rombel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laptops');
    }
};
