<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegiseterRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Users\UserService;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;


class UserController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('token.acess', only: [ 'store', 'create'  ]),
        ];
    }

    public function index()
    {
        return view('main.users.login');
    }

    public function create()
    {
        return view('main.users.create');
    }


    public function store(RegiseterRequest $request , UserService $servise )
    {
        return $servise->auth_registr($request);
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
