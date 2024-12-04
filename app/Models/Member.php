<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Specify the fields that can be mass-assigned
    protected $fillable = ['name', 'rank', 'picture']; // Add picture to the fillable array
}
