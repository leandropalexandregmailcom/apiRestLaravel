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
        return view('user/index')->with('users', User::where(['status' => 1])->get());
    }

    public function show()
    {
        return view('user/show');
    }

    public function create(CreateUserRequest $request)
    {
        User::create($request->all());

        return view('user/index')->with('users', User::where(['status' => 1])->get());
    }

    public function update(UpdateUserRequest $request)
    {
        User::where(['id' => $request->id])->update($request->except('_token'));

        return view('user/index')->with('users', User::where(['status' => 1])->get());
    }

    public function edit(EditUserRequest $request)
    {
        return view('user/edit')->with('user', User::where(['status' => 1])->first());
    }

    public function delete(EditUserRequest $request)
    {
        return view('user/index')->with('users', User::where(['status' => 1])->update(['status' => 0]));
    }
}
