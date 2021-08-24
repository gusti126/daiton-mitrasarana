<?php

namespace App\Http\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;

class Blog extends Component
{
    public $keywordCari;
    public function render()
    {
        $data = ModelsBlog::paginate(8);
        if ($this->keywordCari !== null) {
            $data = ModelsBlog::where('title', 'like', '%' . $this->keywordCari . '%')->latest()->paginate(8);
        }
        return view('livewire.blog', [
            'blogs' => $data
        ])->extends('layouts.admin')->section('content');
    }
}
