<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    
    protected $table = 'gallery_table';
    protected $fillable = [
        'gallery_category',
        'gallery_image',
        'gallery_description',
        'created_at',
    ];
}
