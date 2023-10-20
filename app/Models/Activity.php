<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'actions',
        'user_id'
    ];

    // public function setActionsAttribute($value)
    // {
    //     $this->attributes['actions'] = json_encode($value);
    // }

    // public function getActionsAttribute($value)
    // {
    //     return json_decode($value, true);
    // }
}
