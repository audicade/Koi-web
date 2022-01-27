<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Repository extends RepositoryAbstract
{

    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function getLatest()
    {
        return $this->model->latest()->get();
    }

    public function getOrderBy(string $column, string $method = 'asc')
    {
        return $this->model->orderBy($column, $method)->get();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function store(array $data)
    {
        return $this->create($data);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, int $id)
    {
        $model = $this->find($id);
        if ($model) {
            $model->update($data);
            return $model;
        }
        return 0;
    }

    public function delete(int $id)
    {
        $model = $this->find($id);
        if ($model) {
            return $model->delete();
        }
        return 0;
    }

    public function destroy(int $id)
    {
        return $this->delete($id);
    }
}
