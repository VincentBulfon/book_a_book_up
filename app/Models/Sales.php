<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    public $timestamps = true;
    protected $fillable = array('public_price', 'student_price');

    public function AcademicYear()
    {
        return  $this->belongsTo(AcademicYear::class);
    }

    public function Book()
    {
        return  $this->belongsTo(Book::class);
    }

    public function scopeCurrent($query, $id)
    {
        return $query->where('academic_year_id', $id)->first();
    }
}
