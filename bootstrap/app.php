<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        $middleware->alias([
            'dekan' => \App\Http\Middleware\Dekan::class,
            'akademik' => \App\Http\Middleware\Akademik::class,
            'dosenwali' => \App\Http\Middleware\Dosenwali::class,
            'kaprodi' => \App\Http\Middleware\Kaprodi::class,
            'mahasiswa' => \App\Http\Middleware\Mahasiswa::class,

        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
