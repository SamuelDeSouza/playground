<?php
// samueldesouza\playground\src\PainelAdminServiceProvider.php
namespace samueldesouza\playground;
// use Illuminate\Routing\Router;
class PainelAdminServiceProvider extends  \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Http/controllers' => app_path('Http/Controllers'),
            __DIR__.'/Http/Middleware' => app_path('Http/Middleware'),
            __DIR__.'/Models' => app_path('Models'),
            // __DIR__.'/routes' => base_path('routes'),
            __DIR__.'/resources/views' => resource_path('resources/views'),
            __DIR__.'/database/seeds' => database_path('/seeds'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes/admin.php');
        // $this->loadViewsFrom(__DIR__.'/resources/views/Admin/', 'Admin');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
    public function register()
    {
    }
}