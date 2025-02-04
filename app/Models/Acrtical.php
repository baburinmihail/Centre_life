<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acrtical extends Model
{
    /** @use HasFactory<\Database\Factories\AcrticalFactory> */
    use HasFactory;

    protected $fillable = [
        
        'name_acrtical',
        'description',
        'images',
    ];
}
