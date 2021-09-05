<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderStatus extends Pivot
{
    protected $table = 'order_status';
    public $timestamps = true;

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
