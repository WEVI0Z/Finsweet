<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "category",
        "user_id",
        "title",
        "image"
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function pictures() {
        return $this->hasMany(Picture::class);
    }

    function paragraphs() {
        return $this->hasMany(Paragraph::class);
    }
}
