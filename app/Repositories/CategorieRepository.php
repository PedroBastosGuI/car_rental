<?php

namespace App\Repositories;
use App\Interfaces\CategorieRepositoryInterface;
use App\Models\Categorie;

class CategorieRepository implements CategorieRepositoryInterface
{
    protected $model;

    public function __construct(Categorie $model)
    {
         $this->model = $model;
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function getList()
    {
        return $this->model->all();
    }

    public function get($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(array $data, $id)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

}
