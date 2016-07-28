<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UpworkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    private $config;

    public function boot()
    {

        $this->config = new \Upwork\API\Config(
            array(
                'consumerKey'       => '9684c34abbc857cbef2e43e67c97856e',  // SETUP YOUR CONSUMER KEY
                'consumerSecret'    => '3a49da03e533ff59',                // SETUP KEY SECRET
                'accessToken'       => $_SESSION['access_token'],       // got access token
                'accessSecret'      => $_SESSION['access_secret'],      // got access secret
        //        'verifySsl'         => false,                           // whether to verify SSL
                'debug'             => true,                            // enables debug mode
                'authType'          => 'OAuthPHPLib' // your own authentication type, see AuthTypes directory
            )
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function getConfig() {
        return $this->config;
    }
}
