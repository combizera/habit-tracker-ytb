<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        if(!Auth::attempt($credentials)){
            return new JsonResponse([
                'message' => 'Invalid credentials',
                'success' => false,
            ], 401);
        }

        $loggedUser = Auth::user();

        $token = $loggedUser->createToken('auth');

        return new JsonResponse([
            'message' => 'Logged in successfully',
            'success' => true,
            'token' => $token->plainTextToken,
        ]);
    }
}
