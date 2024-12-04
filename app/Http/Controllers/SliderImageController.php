<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderImageController extends Controller
{

    public function index()
    {
        // Fetch all slider images from the database
        $sliderImages = SliderImage::all();

        // Return the view with the images
        return view('upload', compact('sliderImages'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Only allow certain types of image files
        ]);

        // Handle the image upload
        $imagePath = $request->file('picture')->storeAs(
            'slider_images', 
            time() . '-' . $request->file('picture')->getClientOriginalName(), // Prefix with timestamp to ensure uniqueness
            'public' // Store it in the public disk
        );

        // Save the image information to the database
        SliderImage::create([
            'picture' => $imagePath,
        ]);

        // Redirect back to the images list with a success message
        return redirect()->route('slider-images.index')->with('success', 'Image uploaded successfully!');
    }


    public function destroy($id)
    {
        // Find the image by its ID in the database
        $sliderImage = SliderImage::findOrFail($id);

        // Get the path to the image file
        $filePath = $sliderImage->picture;

        // Check if the file exists in storage before deleting
        if (Storage::disk('public')->exists($filePath)) {
            // Delete the image from the public directory
            Storage::disk('public')->delete($filePath);
        } else {
            // If the image doesn't exist in storage, return an error message
            return redirect()->route('slider-images.index')->with('error', 'Image not found in storage.');
        }

        // Delete the image record from the database
        $sliderImage->delete();

        // Redirect back to the images list with a success message
        return redirect()->route('slider-images.index')->with('success', 'Image deleted successfully!');
    }
}
