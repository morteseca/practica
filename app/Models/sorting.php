<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sorting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'price',
        'country',
        'year',
        'model',
        'category'
    ];
}
