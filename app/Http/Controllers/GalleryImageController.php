<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    // Display all gallery images
    public function index()
    {
        $galleryImages = GalleryImage::all();
        return view('gallery', compact('galleryImages'));
    }

    // Store newly uploaded images (multiple images at once)
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'images' => 'required|array', // Make sure 'images' is an array
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ensure each file is an image
        ]);

        // Loop through each uploaded file and handle the image upload
        foreach ($request->file('images') as $image) {
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('gallery_images', $imageName, 'public');

            // Save the image information to the database
            GalleryImage::create([
                'image_name' => $imageName,
            ]);
        }

        // Redirect back with success message
        return redirect()->route('gallery.index')->with('success', 'Images uploaded successfully!');
    }

    // Delete a gallery image
    public function destroy($id)
    {
        $galleryImage = GalleryImage::findOrFail($id);
        
        // Delete the image from storage
        if (Storage::disk('public')->exists('gallery_images/' . $galleryImage->image_name)) {
            Storage::disk('public')->delete('gallery_images/' . $galleryImage->image_name);
        }

        // Delete the image record from the database
        $galleryImage->delete();

        // Redirect back with success message
        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully!');
    }
}
