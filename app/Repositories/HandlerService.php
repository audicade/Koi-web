<?php

namespace App\Repositories;

use App\Models\Handler;

class HandlerService extends Repository
{

    public function __construct()
    {
        $this->model = new Handler;
    }

    public function selectHandler()
    {
        return $this->model->pluck('nama_handler','id');
    }
}
