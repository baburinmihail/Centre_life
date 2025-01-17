<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Users\UserService;


class UserController extends Controller
{

    public function index()
    {
        return view('main.users.login');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }

    public function login(UserService $servise, LoginRequest $request)
    {
        return $servise->auth_try($request); 

        //route('admin.panel');
    }
}
