<?php

namespace App\Repositories;

abstract class RepositoryAbstract
{

    protected $model;

    abstract public function all();

    abstract function getLatest();

    abstract public function getOrderBy(string $column, string $method = 'asc');

    abstract public function create(array $data);

    abstract public function store(array $data);

    abstract public function find(int $id);

    abstract public function update(array $data, int $id);

    abstract public function delete(int $id);

    abstract public function destroy(int $id);
}
