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
         Schema::create('refer_doctor', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_email');
            $table->string('patient_id');
            $table->string('patient_email');
            $table->string('message_sent');
            $table->string('refer_from_name');
            $table->string('refer_from_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("refer_doctor");
    }
};