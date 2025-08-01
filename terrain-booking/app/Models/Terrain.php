<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use HasFactory;
protected $fillable = ['owner_id', 'title', 'description', 'price_per_hour'];

    protected $guarded = [];
}
