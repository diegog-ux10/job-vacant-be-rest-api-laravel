<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('birthdate');
            $table->integer('work_experience');
            $table->unsignedBigInteger('job_vacancy_id');
            $table->foreign('job_vacancy_id')
          ->references('id')
          ->on('job_vacancies')
          ->onDelete('cascade');
            //$table->foreignId('job_vacancy_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applies');
    }
};
