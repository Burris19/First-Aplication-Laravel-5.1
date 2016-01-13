<?php

namespace TeachMe\Components;
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 13/01/16
 * Time: 12:33 AM
 */

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;
class HtmlBuilder extends CollectiveHtmlBuilder
{
    public function menu()
    {
        return view('partials/menu');
    }

}