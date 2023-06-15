<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $fillable = ['name','color','parent', 'category_type_id'];

    function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }
    function item()
    {
        return $this->belongsTo(item::class);
    }
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
    public function expenditure()
    {
        return $this->hasMany(Expenditure::class);
    }
}
