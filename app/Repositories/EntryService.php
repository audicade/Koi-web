<?php

namespace App\Repositories;

use App\Models\Entry;

class EntryService extends Repository
{

    public function __construct()
    {
        $this->model = new Entry;
    }
    public function getEntry(){
        $column = 'tanggal_event';
        $method = 'desc';
        return $model->orderBy($column, $method)->limit(3)->get();
    }
}
