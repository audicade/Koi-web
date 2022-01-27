<?php

namespace App\Repositories;

use App\Models\Kategori;

class KategoriService extends Repository
{

    public function __construct()
    {
        $this->model = new Kategori;
    }

    public function selectKategori()
    {
        return $this->model->pluck('kategori_koi','id');
    }
}
