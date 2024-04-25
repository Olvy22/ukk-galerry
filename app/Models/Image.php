<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;

class Image extends Model
{
    protected $fillable = ['image', 'user_id', 'caption', 'category'];
}
