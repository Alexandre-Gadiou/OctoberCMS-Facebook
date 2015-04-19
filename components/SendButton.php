<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class SendButton extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Send button',
            'description' => 'Facebook send button'
        ];
    }

    public function defineProperties()
    {
        return [
            'facebook_page_url' => [
                'title' => 'URL',
                'description' => 'Page to send',
                'type' => 'string',
            ],
            'custom_css' => [
                'title' => 'Css',
                'description' => 'add custom css classes',
                'type' => 'string',
            ]
        ];
    }

}
