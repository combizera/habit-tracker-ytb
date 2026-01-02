<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Pest\Laravel\json;

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
        ], 201);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return new JsonResponse([
            'message' => 'Logged out successfully',
            'success' => true,
        ], 200);
    }

    public function logoutAll(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();

        return new JsonResponse([
            'message' => 'Logged out successfully with all tokens',
            'success' => true,
        ], 200);
    }
}
