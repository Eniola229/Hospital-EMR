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
         Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('resiver_id');
            $table->string('message_body')->nullable();
            $table->string('image_sent_path')->nullable();
            $table->string('video_sent_path')->nullable();
            $table->string('pdf_sent_path')->nullable();
            $table->string('replying_msg')->nullable();
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
