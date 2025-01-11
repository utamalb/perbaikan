<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $primaryKey = 'color_id';
    protected $fillable = ['color_code', 'color_name'];

    public function productColors()
    {
        return $this->hasMany(ProductColor::class, 'color_id', 'color_id');
    }
}

