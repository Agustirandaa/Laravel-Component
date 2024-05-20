<?php

namespace App\Models;

use App\Models\Posting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Posting::class);
    }
}
