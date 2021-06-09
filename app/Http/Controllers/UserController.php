<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::where(['status' => 1])->get());
    }

    public function show()
    {
        return view('user/show');
    }

    public function create(CreateUserRequest $request)
    {
        User::create($request->all());

        return response()->json(['status' => 200, 'message' => 'Cadastro efetuado com sucesso']);
    }

    public function update(UpdateUserRequest $request)
    {
        User::where(['id' => $request->id])->update($request->all());

        return response()->json(['status' => 200, 'message' => 'Atualização realizada com sucesso']);
    }

    public function edit(EditUserRequest $request)
    {
        return response()->json(['status' => 200, 'user' => User::where(['id' => $request->id])->first()]);
    }

    public function delete(EditUserRequest $request)
    {
        return response()->json(['status' => 200, 'message' => 'Exclusão realizada com sucesso']);
    }
}
