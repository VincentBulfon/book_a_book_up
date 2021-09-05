<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    public $timestamps = true;
    public $fillable = ['name'];

    /**
     * return relationship instance
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function books()
    {
        return  $this->belongsToMany(Book::class, 'book_author');
    }
}
