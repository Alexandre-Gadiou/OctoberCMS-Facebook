<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class ShareButton extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Share button',
            'description' => 'Facebook share button'
        ];
    }

    public function defineProperties()
    {
        return [
            'facebook_page_url' => [
                'title' => 'URL',
                'description' => 'Facebook page to share',
                'type' => 'string',
            ],
            'layout' => [
                'title' => 'Layout',
                'type' => 'dropdown',
                'default' => 'button',
                'options' => ['box_count' => 'box_count', 'button_count' => 'button_count', 'button' => 'button', 'icon_link' => 'icon_link', 'icon' => 'icon', 'link' => 'link']
            ],
            'custom_css' => [
                'title' => 'Css',
                'description' => 'add custom css classes',
                'type' => 'string',
            ]
        ];
    }

}
