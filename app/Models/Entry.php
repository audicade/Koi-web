<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entry extends Model
{
    use HasFactory;

    protected $table = 'entrys';
    protected $fillable = [
        'owner',
        'gambar_koi',
        'id_varietas',
        'id_kategori',
        'id_event',
        'id_kota',
        'id_handler',
        'keterangan_tambahan',
    ];

    public function varietas()
    {
        return $this->belongsTo(Varietas::class, 'id_varietas');
    }

    public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }

    public function event()
    {
        return $this->BelongsTo(Event::class, 'id_event');
    }
}
