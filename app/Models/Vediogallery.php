<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vediogallery extends Model
{
    use HasFactory;
    protected $table = 'videogallery_table';
    protected $fillable = [
        'video_title',
        'video_link',
        'video_description',
        'created_at',
    ];
}
