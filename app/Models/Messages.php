<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $table = "messages";

    protected $fillable = [
        "user_id",
        "resiver_id",
        "message_body",
        "image_sent_path",
        "video_sent_path",
        "pdf_sent_path",
        "replying_msg",
    ];
}
