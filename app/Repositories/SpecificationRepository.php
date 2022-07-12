<?php

namespace App\Repositories;
use App\Models\Specification;


class SpecificationRepository
{
    protected $models;

    public function __construct(Specification $model){
        $this->models = $model;
    }

    public function store(array $data)
    {
        return $this->models->create($data);
    }

    public function getList()
    {
        return $this->models->all();
    }

    public function get($id)
    {
        return $this->models->findOrFail($id);
    }

    public function update(array $data, $id)
    {
        return $this->models->findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return $this->models->destroy($id);
    }
}
