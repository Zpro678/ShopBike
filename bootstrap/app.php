<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ValidateUserData;
//import các middleware
use App\Http\Middleware\DemoMiddleWare;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //Alias
        $middleware->alias([
            'validate.user'  => ValidateUserData::class,
            'CheckLoginUser' => \App\Http\Middleware\CheckLoginUser::class,
            'CheckLoginAdmin' => \App\Http\Middleware\CheckLoginAdmin::class,
        ]);

        //Global
        $middleware->append(\App\Http\Middleware\DemoMiddleWare::class); // đăng ký cho toàn bộ route
        /* xử lí auto đăng ký [code khá khó hiểu]
            $middlewarePath = app_path('Http/Middleware');

    if (!is_dir($middlewarePath)) {
        return;
    }

    $aliases = [];

    $iterator = new \RecursiveIteratorIterator(
        new \RecursiveDirectoryIterator($middlewarePath, \FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $fileInfo) {
        if (!$fileInfo->isFile()) {
            continue;
        }

        if ($fileInfo->getExtension() !== 'php') {
            continue;
        }

        // Lấy đường dẫn relative từ folder middleware và chuyển sang namespace
        $relative = str_replace($middlewarePath . DIRECTORY_SEPARATOR, '', $fileInfo->getPathname());
        $class = 'App\\Http\\Middleware\\' . str_replace(DIRECTORY_SEPARATOR, '\\', substr($relative, 0, -4)); // remove ".php"

        if (!class_exists($class)) {
            continue;
        }

        $ref = new \ReflectionClass($class);

        // Bỏ qua abstract, interface, trait
        if (!$ref->isInstantiable()) {
            continue;
        }

        // Kiểm tra có method handle public không (điều kiện để coi như middleware)
        if (!$ref->hasMethod('handle')) {
            continue;
        }

        $method = $ref->getMethod('handle');
        if (!$method->isPublic() || $method->isStatic()) {
            continue;
        }

        // Tạo alias; bạn có thể đổi sang Str::snake(...) hoặc Str::kebab(...) tuỳ style
        $alias = \Illuminate\Support\Str::camel($ref->getShortName());

        // Nếu trùng alias, tạo tên khác tránh ghi đè
        if (isset($aliases[$alias])) {
            $base = $alias;
            $i = 2;
            while (isset($aliases[$alias])) {
                $alias = $base . $i;
                $i++;
            }
        }

        $aliases[$alias] = $class;
    }

    if (!empty($aliases)) {
        $middleware->alias($aliases);
    }
        */
        // $middleware->alias([
        //     'validate.user' => ValidateUserData::class,
        // ]);



    })
     
    ->withProviders([
        Yajra\DataTables\DataTablesServiceProvider::class,
    ])

    ->withExceptions(function (Exceptions $exceptions): void {
        // 
    })->create();
