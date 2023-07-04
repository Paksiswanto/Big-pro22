<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $fillable = ['name','color','parent', 'category_type_id','company_id'];

    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class, 'category_type_id');
    }
    function item()
    {
        return $this->belongsTo(item::class);
    }
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
    public function incomesRoutine()
    {
        return $this->hasMany(IncomeRoutine::class);
    }
    public function expenditureRoutine()
    {
        return $this->hasMany(expenditureRoutine::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
