<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class Link extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Page link',
            'description' => 'Facebook page link'
        ];
    }

    public function defineProperties()
    {
        return [
            'facebook_page_url' => [
                'title' => 'URL',
                'description' => 'Facebook page url',
                'type' => 'string',
            ],
            'size' => [
                'title' => 'Size',
                'description' => 'Button size',
                'type' => 'string'
            ],
            'custom_css' => [
                'title' => 'Css',
                'description' => 'add custom css classes',
                'type' => 'string',
            ]
        ];
    }

}
