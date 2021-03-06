<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'prd_id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_detail', 'prd_id', 'order_id');
    }
}
