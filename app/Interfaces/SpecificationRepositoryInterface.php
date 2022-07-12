<?php

namespace App\Interfaces;


interface SpecificationRepositoryInterface
{
    public function store(array $data);
    public function getList();
    public function get($id);
    public function update(array $data,$id);
    public function delete($id);
}
