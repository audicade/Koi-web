<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handler extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_handler',
        'username',
        'password',
    ];
}
