<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user() && auth()->user()->role == 'admin'){
        return $next($request);
        }
        return redirect('/');
    }

    


//     public function users(Request $request)
// {
//     $users = User::paginate(10);
//     return view('admin.index', compact('users'));
// }


}
