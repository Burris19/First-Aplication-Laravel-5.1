<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 13/01/16
 * Time: 12:41 AM
 */

namespace TeachMe\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use TeachMe\Components\HtmlBuilder;
class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['url']);
        });
    }
}