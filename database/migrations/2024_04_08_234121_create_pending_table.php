<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingTable extends Migration
{
    public function up()
    {
        Schema::create('pending', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('year')->nullable();
            $table->string('course')->nullable();
            $table->string('phone')->nullable();
            $table->string('gwa')->nullable();
            $table->string('parents_income')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pending');
    }
};
