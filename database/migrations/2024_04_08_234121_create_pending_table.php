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
            $table->string('student_no')->nullable();
            $table->string('parents_income')->nullable();
            $table->string('grade_file')->nullable();
            $table->string('form_with_pic')->nullable();
            $table->string('gmc_cert')->nullable();
            $table->string('tax')->nullable();
            $table->string('reason_letter')->nullable();
            $table->string('id_reg_form')->nullable();
            $table->string('brg_cert')->nullable();
            $table->string('single_parent_id')->nullable();           
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('pending');
    }
};
