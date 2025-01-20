<?php

namespace App\Services\Users;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserService{

    public function auth_try($request)
    {
        $email = $request ->input('email');
        $password = $request ->input('password');

        if(! Auth::guard('web')->attempt(['email' => $email,'password' => $password])){
            return error_mesage_back('Неверный логин или пароль', 401);
        }

        $user = Auth::user();

        return auth_accsess();

    }

    public function auth_registr($request)
    {

        User::query()->create([
            'email' => $request ->input('email'),
            'password' => $request ->input('password'),
            'role' => UserRole::User,
        ]);

        return $this->auth_try($request);

    }
}