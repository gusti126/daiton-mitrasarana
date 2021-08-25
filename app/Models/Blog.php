<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'thumbnail', 'body'
    ];
    protected $append = ['imgUrl'];

    public function getImgUrlAttribute()
    {
        return env('APP_URL') . 'storage/' . $this->thumbnail;
    }

    public function komentar()
    {
        return $this->hasMany('App\Models\Komentar');
    }
}
