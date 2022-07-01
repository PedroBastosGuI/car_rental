<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RentalRepository;

class RentalController extends Controller
{
    //
    protected $repo;

    public function __construct(RentalRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request)
    {
        return $this->repo->store([
            'car_id' => $request->car_id,
            'user_id' => $request->user_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'expected_return_date' => $request->expected_return_date,
            'total' => $request->total
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
            'car_id' => $request->car_id,
            'user_id' => $request->user_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'expected_return_date' => $request->expected_return_date,
            'total' => $request->total
        ],$id);

        return response()->json(['message' =>'Aluguel atualizado com sucesso!'],200);
    }

    public function delete($id)
    {
         $this->repo->delete($id);
         return response()->json(['message' =>'Aluguel deletado com sucesso!'],200);
    }
}
