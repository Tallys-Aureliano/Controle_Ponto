<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role = auth()->user()->role;
        $business = auth()->user()->business_id;

        if ($role != 1){
            return redirect()->route('dashboard')->with('error', 'Você não tem autorização para acessar essa página.');
        }

        if(auth()->user()->is_point_active == 1){
            return redirect()->route('manager.point.create');
        }

        if (!$business){
            return redirect()->route('business.create')
                ->with('info', 'Antes de continuar, é necessário criar uma empresa.');
        }

        return $next($request);
    }
}
