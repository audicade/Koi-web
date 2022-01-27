<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varietas extends Model
{
    use HasFactory;

    protected $table='varietass';
    protected $fillable = [
        'nama_varietas',
    ];

    public function entry()
    {
        return $this->hasMany(Entry::class, 'id_varietas');
    }
}
