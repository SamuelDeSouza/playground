<?php
// samueldesouza\playground\src\PainelAdminServiceProvider.php
namespace samueldesouza\playground;
use Illuminate\Support\ServiceProvider;
class PainelAdminServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/admin.php');
        $this->loadViewsFrom(__DIR__.'/resources/views/Admin/', 'Admin/');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    }
    public function register()
    {
    }
}