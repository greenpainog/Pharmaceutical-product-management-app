<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'active_ingredients',
        'batch_number',
        'research_status',
        'manufacturing_date',
        'expiration_date',
    ];
}
