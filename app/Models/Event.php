<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event',
        'url_poster',
        'detail_event',
        'id_kota',
        'tanggal_event',
    ];

    public function entry()
    {
        return $this->hasMany(Entry::class,'id');
    }
}
