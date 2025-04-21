<?php

namespace App\Services\Users;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Token;
use Illuminate\Support\Str;


class UserService{

    public function auth_try($request)
    {
        $email = $request ->input('email');
        $password = $request ->input('password');

        if(! Auth::guard('web')->attempt(['email' => $email,'password' => $password])){
            return error_mesage_back('Неверный логин или пароль', 401);
        }
        

        $user = Auth::user();
        $token = Str::random(50);
        $lifeToken = date("Y-m-d H:i:s", time() + 3600);

        $request->session()->put('my_token', $token);
        //dd(session()->only(['my_token']));


        Token::where('lifeToken', '>', time())->delete();

        Token::query()->create([
            'user_id' => $user->id,
            'lifeToken' => $lifeToken,
            'token' => $token,
        ]);

        
        //return auth_accsess();
        return redirect()->route('home');

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