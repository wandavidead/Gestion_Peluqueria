<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cantidad
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
		$cantidad = $request->cantidad;
		
		if ($cantidad !== null) {
			if ( $cantidad == 0) {
				return redirect('https://www.tahe.es/');
			}
		}
		return $next($request);
	}
        
}
