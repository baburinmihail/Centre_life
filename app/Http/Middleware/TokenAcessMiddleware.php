<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Token;

class TokenAcessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(session()->has(['my_token'])){
            $token = (session()->only(['my_token']));
            $tokenModel = Token::where('token', $token['my_token'])->first();
            $role = $tokenModel->users->role;
            if ($role === 'admin'){
                return $next($request);
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('home');
        }



        
    }
}
