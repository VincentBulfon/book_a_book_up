<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextualContent extends Model
{
    use HasFactory;

    protected $table = 'textual_content';
    public $timestamps = true;

    public function book()
    {
        return $this->hasOne(Book::class);
    }
}
