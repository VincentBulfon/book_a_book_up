<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Cover extends Model
{
    use HasFactory;

    public function getCoverPathAttribute()
    {
        return Storage::disk('public')->url("covers/thumbnails/". $this->cover);
    }
}
