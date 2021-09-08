<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey  = 'order_detail_id';

    public function product()
    {
        return $this->belongsTo(Food::class, 'prd_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
