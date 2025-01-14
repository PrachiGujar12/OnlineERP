<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiamondType extends Model
{
    use HasFactory;

    protected $table = 'diamond_type';

    // Fillable fields
    protected $fillable = ['type'];
}
