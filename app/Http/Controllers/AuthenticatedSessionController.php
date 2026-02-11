<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle logout
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Log user out

        $request->session()->invalidate(); // Destroy session
        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect to login page
    }
}
