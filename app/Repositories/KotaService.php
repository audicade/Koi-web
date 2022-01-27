<?php

namespace App\Repositories;

use App\Models\Kota;

class KotaService extends Repository
{

    public function __construct()
    {
        $this->model = new Kota;
    }

    public function selectCity()
    {
        return $this->model->pluck('nama_kota', 'id');
    }
}
