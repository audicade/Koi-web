<?php

namespace App\Repositories;

use App\Models\Varietas;

class VarietasService extends Repository
{

    public function __construct()
    {
        $this->model = new Varietas;
    }

    public function selectVarietas()
    {
        return $this->model->pluck('nama_varietas','id');
    }
}
