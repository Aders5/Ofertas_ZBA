<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $casts = [
    'vigencia' => 'date',
];
}
