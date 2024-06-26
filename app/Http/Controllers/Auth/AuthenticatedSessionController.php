<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
    
        $request->session()->regenerate();
    
        $user = User::where('email', $request->email)->first();
    
        if ($user) {

            $role = $user->role;

            if ($role == 'medecin') {
                return redirect()->route('medecin.index');
            } elseif ($role == 'patient') {
                return redirect()->route('patient.index');
            } else{
                return redirect()->route('admin.index');
            }
        } else {
            return redirect()->back()->with('error', 'Utilisateur non trouvé.');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
