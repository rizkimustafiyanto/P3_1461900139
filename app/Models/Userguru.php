<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userguru extends Model
{
    use HasFactory;
    protected $table = "User";
    protected $fillable = [
        'username', 'password'
    ];
}
