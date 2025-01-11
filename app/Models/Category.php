<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';
    protected $fillable = ['parent_category_id', 'category_name'];

    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_category_id', 'category_id');
    }
}

