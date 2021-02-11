<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_text',
        'blog_id',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d.m.Y , G:i', strtotime($value));
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['user_id'] = Auth::user()->id;
        $this->attributes['blog_id'] = Auth::user()->id;
    }
}
