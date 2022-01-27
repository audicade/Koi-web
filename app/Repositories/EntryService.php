<?php

namespace App\Repositories;

use App\Models\Entry;

class EntryService extends Repository
{

    public function __construct()
    {
        $this->model = new Entry;
    }
}