<?php
/*
 * This file is part of Laravel Instagram.
 *
 * (c) Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Emmanueln\Instagram;

use Emmanueln\Instagram\Instagram;
use Illuminate\Support\ServiceProvider;
/**
 * This is the Instagram service provider class.
 *
 * @author Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 */
class InstagramServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }
    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/instagram.php');
        $this->publishes([$source => config_path('instagram.php')]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerInstagram();
    }

    /**
     * Register the manager class.
     *
     * @return void
     */
    protected function registerInstagram()
    {
        $this->app->singleton('instagram', function ($app) {
            $config = config('instagram');
            return new Instagram($config);
        });
        $this->app->alias('instagram', Instagram::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return ['instagram'];
    }
}
