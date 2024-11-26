<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;

class GalleryController extends Controller
{
    public function index()
{
    $photos = PhotoGallery::orderBy('created_at', 'desc')->paginate(20); // Sort by latest first and paginate
    return view('gallery.index', compact('photos'));
}

}
