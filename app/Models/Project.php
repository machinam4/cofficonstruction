<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'client',
        'architect',
        'builder',
        'budget',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
    ];
}
