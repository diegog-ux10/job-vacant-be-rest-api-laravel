<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $isUser = Auth::attempt($credentials);
        if ($isUser) {
            $user = User::where('email', $credentials['email'])->first();
            return response()->json(['user' => $user]);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}
