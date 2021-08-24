<?php

namespace App\Http\Livewire;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        $banner = ModelsBanner::get();

        return view('livewire.banner', [
            'banners' => $banner
        ])->extends('layouts.admin')->section('content');
    }
}
