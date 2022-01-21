<?php
// vk2\paineladmin\src\PainelAdminServiceProvider.php
namespace vk2\paineladmin;
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