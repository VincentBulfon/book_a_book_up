<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = true;
    use HasFactory ,SoftDeletes;

    protected $fillable = [];
    protected $dates = ['deleted_at'];

    /**
     * return the relation for the orders asociated to this book
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order')->withPivot('quantity');
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * return the relationship for authors associated to this book
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author');
    }

    /**
     * return the relationship for the academics years and the price from pivot associated to this command
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function academicYears()
    {
        return $this->belongsToMany(AcademicYear::class, 'sales', 'academic_year_id', 'book_id')->withPivot('student_price', 'public_price');
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }

    public function textualContent()
    {
        return $this->belongsTo(TextualContent::class);
    }

    public function cover()
    {
        return $this->hasOne(Cover::class);
    }

    public function getAcademicYearSale($id)
    {
        return $this->sales()->firstWhere('academic_year_id', $id);
    }


    public function getAvailabilityAttribute()
    {
        return $this->available;
    }

    public function getSaleAttribute()
    {
        return $this->sales[0];
    }

    /**
     * return the quantity of ordered book
     * @return integer
     */
    public function getQuantityAttribute()
    {
        return $this->pivot->quantity;
    }

    public function getStudentPriceAttribute()
    {
        return $this->sale->student_price;
    }
}
