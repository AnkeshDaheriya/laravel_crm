<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services_table';
    protected $fillable = [
        'services_title',
        'services_image',
        'services_description',
        'created_at',
    ];
}
