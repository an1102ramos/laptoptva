<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'sub_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }
}
