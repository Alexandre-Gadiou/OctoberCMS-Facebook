<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class FollowButton extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Follow button',
            'description' => 'Facebook follow button'
        ];
    }

    public function defineProperties()
    {
        return [
            'facebook_page_url' => [
                'title' => 'URL',
                'description' => 'Page to follow',
                'type' => 'string',
            ],
            'layout' => [
                'title' => 'Layout',
                'type' => 'dropdown',
                'default' => 'button',
                'options' => ['standard' => 'standard', 'box_count' => 'box_count', 'button_count' => 'button_count', 'button' => 'button']
            ],
            'color' => [
                'title' => 'Color scheme',
                'type' => 'dropdown',
                'default' => 'light',
                'options' => ['light' => 'light', 'dark' => 'dark']
            ],
            'show_faces' => [
                'title' => 'Show faces',
                'description' => 'Show facebook page faces',
                'type' => 'checkbox',
                'default' => true
            ],
            'width' => [
                'title' => 'Width',
                'description' => 'Button width',
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
