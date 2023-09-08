<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about_table';
    protected $fillable = [
        'about_description',
        'about_image',
        'created_at',
    ];
}
