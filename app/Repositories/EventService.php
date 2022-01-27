<?php

namespace App\Repositories;

use App\Models\Event;

class EventService extends Repository
{

    public function __construct()
    {
        $this->model = new Event;
    }

    public function selectEvent()
    {
        return  $this->model->pluck('nama_event','id');
    }
}
