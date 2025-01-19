<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(RegisterRequest $request)
    {
//        $fields = $request->validate([
//            'name' => 'required|max:255',
//            'email' => 'required|email|unique:users',
//            'password' => 'required|confirmed',
//        ]);

        $user = User::create($request->all());
        $token = $user->createToken($request->email);
        return response()->json([
            'user' => $user,
            'token' => $token->plainTextToken
        ], 201);
    }
}
