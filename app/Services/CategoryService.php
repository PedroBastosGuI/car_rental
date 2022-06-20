<?php

namespace App\Service;

use App\Repositories\CategorieRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryService
{
    protected $repository;

    public function __construct(CategorieRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(array $data)
    {
        return $this->repository->store($data);
    }

    public function getList()
    {
        return $this->repository->getList();
    }

    public function get($id)
    {
        return $this->repository->get($id);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data,$id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
