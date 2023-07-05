<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoritSidebar extends Model
{
    use HasFactory;
    protected $table = "favorit_sidebars";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
