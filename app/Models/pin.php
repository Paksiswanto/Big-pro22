<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pin extends Model
{
    use HasFactory;
    protected $table = "pins";
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
