<?php
namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SliderImage;

class PublicHomeController extends Controller
{
    public function index()
    {
        $sliderImages = SliderImage::select('picture')->get();
        return view('public.home', compact('sliderImages'));
    }
}
