<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $news = app(NewsController::class)->getNewsData();

        $recentNewsHeader = News::with('category')
        ->orderByDesc('created_at')
        ->take(12)
        ->get();
        
        return view('index', compact('news', 'recentNewsHeader'));
    }


    public function sejarah()
    {
        return view('profile-sejarah');
    }

    public function visidanmisi()
    {
        return view('profile-visidanmisi');
    }

    public function pegawai()
    {
        return view('pegawais');
    }

    public function galleryFoto()
    {
        return view('gallery-foto');
    }

    public function galleryVideo()
    {
        return view('gallery-video');
    }

    public function pelayananPersyaratan()
    {
        return view('pelayanan-persyaratan');
    }

    public function pelayananAlur()
    {
        return view('pelayanan-alur');
    }

    public function aboutUs()
    {
        return view('aboutus');
    }
}
