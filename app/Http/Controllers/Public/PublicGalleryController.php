<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage; // Make sure you have this model
use Illuminate\Http\Request;

class PublicGalleryController extends Controller
{
    /**
     * Display all gallery images.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all gallery images from the database
        $galleryImages = GalleryImage::all();

        // Return the view and pass the images to the gallery view
        return view('public.gallery', compact('galleryImages'));
    }
}