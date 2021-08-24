<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Komentar;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {
        // dd(User::count());
        return view('livewire.dashboard', [
            'artikelCount' => Blog::count(),
            'userCount' => User::count(),
            'bannerCount' => Banner::count(),
            'komentarCount' => Komentar::count()
        ])->extends('layouts.admin')->section('content');
    }
}
