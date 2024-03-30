<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->string('grade_file')->nullable();
            $table->string('form_with_pic')->nullable();
            $table->string('gmc_cert')->nullable();
            $table->string('tax')->nullable();
            $table->string('reason_letter')->nullable();
            $table->string('id_reg_form')->nullable();
            $table->string('brg_cert')->nullable();
            $table->string('single_parent_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('student_no')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('year_level')->nullable();
            $table->decimal('current_gwa', 4, 2)->nullable();
            $table->decimal('household_income', 10, 2)->nullable();
            $table->enum('role',['admin','agent','opa','user','student',])->default('user');
            $table->enum('status',['active','inactive'])->default('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
