<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "post_id",
        "text",
        "order"
    ];

    function post() {
        return $this->belongsTo(Post::class);
    }
}
