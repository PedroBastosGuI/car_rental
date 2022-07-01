<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CarRepository;


class CarController extends Controller
{
    //
    protected $repo;

    public function __construct(CarRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request)
    {
        return $this->repo->store([
            'name' => $request->name,
            'description' => $request->description,
            'daily_rate' => $request->daily_rate,
            'available' => $request->available,
            'license_plate' => $request->license_plate,
            'fine_amount' => $request->fine_amount,
            'brand' => $request->brand,
            'category_id' => $request->category_id,
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
            'name' => $request->name,
            'description' => $request->description,
            'daily_rate' => $request->daily_rate,
            'available' => $request->available,
            'license_plate' => $request->license_plate,
            'fine_amount' => $request->fine_amount,
            'brand' => $request->brand,
        ],$id);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }
}
