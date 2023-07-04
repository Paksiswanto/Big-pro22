<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table= 'company';

    protected $fillable = [
        'name',
        'address',
        'telephone',
        'npwp',
        'city',
        'country',
        'postal_code',
        'province',
        'email',
        'logo',
        '_token'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
