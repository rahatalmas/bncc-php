<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'slider_images';

    // Define the fillable fields to protect against mass-assignment vulnerability
    protected $fillable = ['picture'];

    // You may also want to disable timestamps if they're not required
    // public $timestamps = false;
}
