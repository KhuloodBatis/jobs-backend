<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {


        if (!auth()->guard()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException();
        }

    }
}
