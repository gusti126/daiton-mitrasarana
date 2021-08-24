<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\ReplyKomen;
use Livewire\Component;
use Illuminate\Support\Str;

class BlogDetail extends Component
{
    public $blogId, $title, $thumbnail, $body;
    public $isSelengkapnya = false;
    public $deskripsi, $komentar;

    public function mount($id)
    {
        $blog = Blog::with('komentar.reply')->findOrFail($id);
        $this->komentar = $blog->komentar;
        // dd($this->komentar);
        $this->blogId = $blog->id;
        $this->title = $blog->title;
        $this->body = $blog->body;
        $this->thumbnail = $blog->thumbnail;

        if ($this->isSelengkapnya) {
            $this->isSelengkapnya = false;
        } else {
            $this->isSelengkapnya = true;
            $this->deskripsi = Str::limit($this->body, 400);
        }

        // dd(strlen($this->deskripsi));
    }

    public function render()
    {
        return view('livewire.blog-detail')->extends('layouts.admin')->section('content');
    }

    public function tambah($id)
    {
        $reply_komen = ReplyKomen::create([
            'user_id' => 1,
            'komentar_id' => $id,
            'body' => $this->message_komentar
        ]);
    }
    public function selengkapnya()
    {
        if ($this->isSelengkapnya) {
            $this->isSelengkapnya = false;
            $this->deskripsi = $this->body;
        } else {
            $this->isSelengkapnya = true;
            $this->deskripsi = Str::limit($this->body, 400);
        }
    }
}
