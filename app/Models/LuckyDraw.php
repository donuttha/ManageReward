<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuckyDraw extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'image_path', 'address'];
}
