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
        Schema::create('pharmacy', function (Blueprint $table) {
            $table->id();
            $table->string("doctors_name");
            $table->string("doctors_email");
            $table->string("patent_name");
            $table->string("patientid");
            $table->string("drugs");
            $table->string("doctors_comments");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacy');
    }
};
