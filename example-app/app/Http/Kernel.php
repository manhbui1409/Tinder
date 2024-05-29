<?php
// app/Http/Kernel.php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // ...

    protected $routeMiddleware = [
        // Thêm middleware vào đây
        'checkAdmin' => \App\Http\Middleware\CheckAdmin::class,
    ];

    // ...
}
