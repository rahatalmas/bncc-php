<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model
    protected $table = 'gallery_images';

    // Specify the fields that can be mass-assigned
    protected $fillable = ['image_name'];
}
