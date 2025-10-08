<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Blade::directive('theme_user',function ($path){
            return "<?php echo asset('user/' . $path);?>";
        });
        Blade::directive('theme_admin',function ($path){
            return "<?php echo asset('admin/' . $path);?>";
        });
    }
}
