<?php

namespace augustogany\caja;

use Illuminate\Support\ServiceProvider;
use Augustogany\Caja\Services\Database;
use Augustogany\Caja\Services\Session;
class CajaChicaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->getStorageService() == 'session')
        {
            $this->app->singleton('cajachica', function($app) {
                return new Session();
            });
        } else
        {
            $this->app->singleton('cajachica', function($app) {
                return new Database();
            });
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/cajachica.php' =>  config_path('cajachica.php'),
         ], 'config');
    }

    /**
     *  Get the storage settings based on config file
     *
     * @return string
     */
    public function getStorageService()
    {
        $class = $this->app['config']->get('cajachica.storage','session');
        switch ($class)
        {
            case 'session':
                return 'session';
                break;
            case 'database':
                return 'database';
                break;
            default:
                return 'session';
                break;
        }
    }
}
