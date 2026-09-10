<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $roleName = Role::find(Auth::user()->role_id)?->name;

        if (!$roleName || !in_array($roleName, $roles)) {
            abort(403); // atau return back()->with('error', 'Akses ditolak');
        }
 
        return $next($request);
    }
}
