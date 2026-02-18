<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OAuthController extends Controller
{

    public function redirect(string $provider): RedirectResponse
    {
        return Socialite::driver($provider)
            ->redirect();
    }

    public function callback(string $provider): RedirectResponse
    {
        $githubUser = Socialite::driver($provider)->user();

        $user = User::query()->updateOrCreate([
            'auth_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => Str::password(32),
        ]);

        Auth::login($user);

        return redirect(route('habits.index'));
    }
}
