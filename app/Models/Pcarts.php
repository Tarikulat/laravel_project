<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcarts extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'photo', 'price', 'product_description'];
}
