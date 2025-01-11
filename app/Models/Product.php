<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name', 'other_data', 'size_id'];

    public function size()
    {
        return $this->belongsTo(ApparelSize::class, 'size_id', 'size_id');
    }

    public function colors()
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'product_id');
    }

    public function categories()
    {
        return $this->hasMany(ProductCategory::class, 'product_id', 'product_id');
    }
}

