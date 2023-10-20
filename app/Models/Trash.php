<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip',
        'couleur',
        'ssid',
        'password',
        'longitude',
        'latitude',
        'description',
        'name',
        'l_name',
        'phone',
        'email',
        'status',
        'type',
        'user_id'
    ];
}
