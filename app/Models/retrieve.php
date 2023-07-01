<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retrieve extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'section',
        'timeIn',
        'timeOut',
        'status'

    ];
}