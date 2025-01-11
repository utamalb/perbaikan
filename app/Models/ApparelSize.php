<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApparelSize extends Model
{
    use HasFactory;

    protected $primaryKey = 'size_id';
    protected $fillable = ['size_code', 'sort_order'];

    public function products()
    {
        return $this->hasMany(Product::class, 'size_id', 'size_id');
    }
}

