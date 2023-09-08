<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonial_table';
    protected $fillable = [
        'reviews',
        'reviews_star',
        'testimonial_image',
        'testimonial_description',
        'created_at',
    ];
}
