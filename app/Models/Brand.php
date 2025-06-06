<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'marca';
    protected $fillable = ['brand']; //esse fillable diz q podemos editar

    protected $casts = [
        'brand' => 'object' 
    ];
}
