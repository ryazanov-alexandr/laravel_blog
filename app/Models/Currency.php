<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'title',
        'price',
        'active',
        'sort',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'sort' => 'int',
    ];

}
