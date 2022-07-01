<?php

namespace App\Repositories;
use App\Models\Rental;

class RentalRepository
{
    protected $models;

    public function __construct(Rental $model){
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
