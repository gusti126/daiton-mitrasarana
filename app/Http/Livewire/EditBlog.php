<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Http\Request;
use Livewire\Component;

class EditBlog extends Component
{
    public $idBlog, $title, $body, $thumbnail;

    public function mount($id)
    {
        $blog = Blog::find($id);
        $this->idBlog = $blog->id;
        $this->title = $blog->title;
        $this->body = $blog->body;
        $this->thumbnail = $blog->thumbnail;
    }

    public function render()
    {
        return view('livewire.edit-blog')->extends('layouts.admin')->section('content');
    }

    public function update(Request $request)
    {
        $data = $request->all();

        dd($data);
    }
}
