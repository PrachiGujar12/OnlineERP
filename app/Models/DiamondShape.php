<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiamondShape extends Model
{
    use HasFactory;

    protected $table = 'diamond_shape';

    // Fillable fields
    protected $fillable = ['shape'];
}