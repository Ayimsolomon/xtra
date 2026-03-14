<?php

namespace App\Http\Controllers\Auth;

use League\OAuth1\Client\Server\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Socialite;
use Exception;

class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     */
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = \App\Models\User::updateOrCreate(
            ['google_id' => $googleUser->getId()], // Search criteria
            [
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'avatar' => $googleUser->getAvatar(),
                'password' => null, // Social users don't need a password
            ]
        );

            Auth::login($user);

            return redirect()->route('dashboard');

        } catch (Exception $e) {
            // Log the error if needed: \Log::error($e->getMessage());
            return redirect()->route('login')->with('error', 'Google Sign-In failed.');
        }
    }
}
