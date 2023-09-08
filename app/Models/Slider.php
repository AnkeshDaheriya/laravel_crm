<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'slider_table';
    protected $fillable = [
        'slider_title',
        'slider_image',
        'slider_description',
        'created_at',
    ];
}
