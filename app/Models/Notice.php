<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    // Specify the primary key for the table
    protected $primaryKey = 'noticeid';

    // Disable auto-incrementing if using a non-standard key
    public $incrementing = true;

    // Specify the type of the primary key
    protected $keyType = 'int';

    // Define the fillable fields for mass assignment
    protected $fillable = ['title', 'description', 'noticefilelink'];
}
