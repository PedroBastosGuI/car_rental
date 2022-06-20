<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategorieRepository;

class CategoriesController extends Controller
{
    protected $repo;

    public function __construct(CategorieRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request)
    {
        return $this->repo->store([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    }

    public function getList()
    {
        return $this->repo->getList();
    }

    public function get($id)
    {
        return $this->repo->get($id);
    }

    public function update(Request $request, $id)
    {

        return $this->repo->update([
            'name' => $request->name,
            'description' => $request->description
        ],$id);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }
}
