<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_text',
        'user_id',
        'blog_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Blog::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d.m.Y , G:i', strtotime($value));
    }
}
