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
        Schema::create('appoinmentdoc', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name');
            $table->string('doctor_email');
            $table->string('doctor_special');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('home_address');
            $table->string('state_of_residence');
            $table->string('department');
            $table->string('a_date');
            $table->string('complain');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('appoinmentdoc');
    }
};
