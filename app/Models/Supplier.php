<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table ='supplier';

    public function expenditure()
    {
        return $this->hasMany(Expenditure::class);
    }
    public function expenditureRoutine()
    {
        return $this->hasMany(expenditureRoutine::class);
    }

    protected $casts = [
        'status' => 'boolean',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
