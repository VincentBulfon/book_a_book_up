<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $table = 'academic_years';
    public $timestamps = true;

    public function books()
    {
        return $this->belongsToMany(App\Models\Books::class, 'sales')->withPivot('student_price', 'public_price');
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
}
