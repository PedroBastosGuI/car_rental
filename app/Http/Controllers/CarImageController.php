<?php

namespace App\Http\Controllers;
use App\Repositories\CarImageRepository;
use Illuminate\Http\Request;

class CarImageController extends Controller
{
    //
    protected $repo;

    public function __construct(CarImageRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request)
    {
        return $this->repo->store([
            'car_id' => $request->car_id,
            'image_name' => $request->image_name
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
        return $this->repo->update([
            'car_id' => $request->car_id,
            'image_name' => $request->image_name
        ],$id);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }
}
