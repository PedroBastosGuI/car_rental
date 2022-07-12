<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SpecificationRepository;


class SpecificationController extends Controller
{
    //
    protected $repo;

    public function __construct(SpecificationRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request)
    {
        return $this->repo->store([
            'name' => $request->name,
            'description' => $request->description
        ]);
    }

    public function getList()
    {
        return $this->repo->getList();
    }

    public function get ($id)
    {
        return $this->repo->get($id);
    }

    public function update (Request $request,$id)
    {
        $this->repo->update([
            'name' => $request->name,
            'description' => $request->description
        ],$id);

        return response()->json(['message' =>'espesificação atualizado com sucesso!'],200);
    }

    public function delete($id)
    {
         $this->repo->delete($id);
         return response()->json(['message' =>'espesificação deletado com sucesso!'],200);
    }
}
