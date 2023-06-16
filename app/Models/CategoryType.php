<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    use HasFactory;
    protected $table = "category_type";
    protected $fillable = ['name'];

    function category()
    {
        return $this->hasMany(Category::class);
    }
    function incomes()
    {
        return $this->hasMany(Income::class);
    }
}
