<?php   // kolha gdeda

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
      
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
       
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];
    protected $routeMiddleware = [
        
        'Icon' => \App\Http\Middleware\IconMiddleware::class,
    ];
}