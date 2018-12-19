<?php
namespace App\Http\Middleware;

use Closure;

class HttpsProtocolPhucAnKhang {

    public function handle($request, Closure $next)
    {
		ini_set('display_errors', 1);
            if (!$request->secure() && env('APP_ENV') === 'prod') {
				
                return redirect()->secure($request->getRequestUri());
            }
	dd('123');
            return $next($request); 
    }
}