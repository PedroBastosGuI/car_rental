<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request)
    {
        return $this->repo->store([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'driver_license' => $request->driver_license,
            'admin' => $request->admin,
            'avatar' => $request->avatar
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
            'password' => $request->password,
            'email' => $request->email,
            'driver_license' => $request->driver_license,
            'admin' => $request->admin,
            'avatar' => $request->avatar
        ],$id);

        return response()->json(['message' =>'Usuario atualizado com sucesso!'],200);
    }

    public function delete($id)
    {
         $this->repo->delete($id);
         return response()->json(['message' =>'Usuario deletado com sucesso!'],200);

    }
}
