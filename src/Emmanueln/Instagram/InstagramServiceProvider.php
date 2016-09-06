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
        $this->publishes([
            __DIR__.'/config/instagram.php' => config_path('instagram.php'),
        ], 'config');
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
     * Register the class.
     *
     * @return void
     */
    protected function registerInstagram()
    {
      $this->app->bind('Emmanueln\Instaram\Instagram',function($app){
          return new Instagram($app);
      });
    }
}
