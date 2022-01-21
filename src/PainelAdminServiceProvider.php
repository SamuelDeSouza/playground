<?php
// samueldesouza\playground\src\PainelAdminServiceProvider.php
namespace samueldesouza\playground;
class PainelAdminServiceProvider extends  \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'Http/controllers' => app_path('Http/Controllers'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes/admin.php');
        // $this->loadViewsFrom(__DIR__.'/resources/views/Admin/', 'Admin');
        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    }
    public function register()
    {
    }
}