<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillabale = [
        'nama', 'email', 'blog_id', 'body'
    ];

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
