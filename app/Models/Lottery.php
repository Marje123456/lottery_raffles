<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    use HasFactory;

    protected $table = 'lotteries';

    protected $fillable =  
    [
        'date',
        'schedule'
    ];

    protected $cast = 
    [
        'date' => 'date',
    ];
}
