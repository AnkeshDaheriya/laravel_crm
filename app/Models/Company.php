<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company_detail';
    protected $fillable = [
        'company name',
        'company address',
        'company email',
        'company phone',
        'website(URL)',
        'company experience',
        'title text',
        'description text',
        'logo image',
        'favicon image',
        'facebook link',
        'instagram link',
        'twitter link',
        'linkedIn link',
        'additional information',
        'created_at',
    ];
}
