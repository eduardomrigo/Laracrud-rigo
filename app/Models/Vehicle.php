<?php

//aqui eh onde diremos oq pode ser preenchido e editado no banco, eh quem faz a ligacao da nossa controller c o BD

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $fillable = ['marca', 'modelo', 'ano'];
}
