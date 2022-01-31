<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
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

    public function getById(int $id)
    {
        return $this->model->where('id',$id)->get();
    }

    public function getOrderByLimit(string $column, string $method = 'asc')
    {
        return $this->model->orderBy($column, $method)->limit(5)->get();
    }
    public function getSideBarContent(){
        $column = 'tanggal_event';
        $method = 'desc';
        $model = new Event;
        return $model->orderBy($column, $method)->limit(3)->get();
    }

    public function getByIdEvent(int $id)
    {
        return $this->model->where('id_event',$id)->get();
    }
}
