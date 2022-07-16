<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $table = 'user_domicilio';

    protected $fillable = [
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad',
        'fecha_nacimento',
        'user_id',
    ];

}
