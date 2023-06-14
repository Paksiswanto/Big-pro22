<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $fillable = ['name','color','parent', 'category_type'];

    function categoryType()
    {
        return $this->belongsTo(CategoryType::class , 'category_type');
    }
    function item()
    {
        return $this->belongsTo(item::class);
    }
}
