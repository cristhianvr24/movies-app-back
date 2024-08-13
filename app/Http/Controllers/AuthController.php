<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return response()->json([
                'user' => $user, 
                'token' => $user->createToken('MoviesApp')->plainTextToken
            ], 200);
        }
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
