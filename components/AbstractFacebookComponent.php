<?php

namespace Algad\Facebook\Components;

use Cms\Classes\ComponentBase;
use Algad\Facebook\Models\Settings;

abstract class AbstractFacebookComponent extends ComponentBase
{

    public function getFaceBookPage()
    {
        return Settings::get('facebook_page');
    }

    public function getOptions()
    {
        return $this->getProperties();
    }

    public function onRun()
    {
        
    }

}
