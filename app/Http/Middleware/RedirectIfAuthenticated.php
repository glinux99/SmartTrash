<?php

namespace App\Http\Middleware;

use App\Models\Connection;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {


        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }
        try {
            $user = User::where('email', $request->input('email'))->firstOrFail();
            $connection = new Connection();
            $connection->user_id = $user->id;
            $connection->save();
        } catch (\Throwable $th) {
            //throw $th;
        }
        return $next($request);
    }
}
