<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banned extends Model
{
    use HasFactory;
    protected $table = 'banneds';
    protected $fillable = [
        'email'
    ];
}
