<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'basic_fees', 'bar_council_fees', 'building_fees', 'advocate_welfare_fees', 'benevolent_fees'];
}