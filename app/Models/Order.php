<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = true;

    use HasFactory,SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'current_status_date'=> 'datetime',
    ];

    /**
     * scope to get current status
     * @param  query $q
     * @return void
     */
    public function scopeWithCurrentStatus($q)
    {
        $q->addSelect([
            'current_status_date' => OrderStatus::select('order_status.created_at')
                ->whereColumn('order_id', 'orders.id')
                ->latest()
                ->take(1)
        ])->addSelect([
            'current_status_id' => OrderStatus::select('order_status.status_id')
                ->whereColumn('order_id', 'orders.id')
                ->whereColumn('created_at', 'current_status_date')
                ->take(1)
        ])->addSelect([
            'current_status_name' => Status::select('status')
                ->whereColumn('id', 'current_status_id')
                ->take(1)
        ]);
    }

    public function scopeActive($query)
    {
        $query->where('is_archived', '=', 0);
    }

    /**
     * Books relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function books()
    {
        return $this->belongsToMany('App\Models\Book')->withPivot('quantity');
    }

    /**
     * Status relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }

    public function activeStatus()
    {
        return $this->hasOne(OrderStatus::class)->latest();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Academic Year relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }

    public function getSatutsIdAttribute()
    {
        return  $this->activeStatus->status->id;
    }

    public function getStatusNameAttribute()
    {
        return  $this->activeStatus->status->status;
    }

    public function getItemsCountAttribute()
    {
        $items = 0 ;
        foreach ($this->books as $book) {
            $items += $book->pivot->quantity;
        }
        return $items;
    }

    public function getTotalPriceAttribute()
    {
        $totalPrice = 0;
        foreach ($this->books as $book) {
            $totalPrice += $book->sale->student_price * $book->pivot->quantity;
        }
        return $totalPrice;
    }
}
