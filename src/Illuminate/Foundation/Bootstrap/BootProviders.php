<?php

namespace Illuminate\Foundation\Bootstrap;

use Illuminate\Contracts\Foundation\Application;

class BootProviders
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {

        /**
         * 启动服务提供者
         *
         * @see https://github.com/laravel-book/framework/blob/5.7/src/Illuminate/Foundation/Application.php#L791
         */
        $app->boot();
    }
}
