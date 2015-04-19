<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class LikeButton extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Like button',
            'description' => 'Facebook like button'
        ];
    }

    public function defineProperties()
    {
        return [
            'facebook_page_url' => [
                'title' => 'URL',
                'description' => 'Facebook page to like',
                'type' => 'string',
            ],
            'layout' => [
                'title' => 'Layout',
                'type' => 'dropdown',
                'default' => 'button',
                'options' => ['standard' => 'standard', 'box_count' => 'box_count', 'button_count' => 'button_count', 'button' => 'button']
            ],
            'action_type' => [
                'title' => 'Action type',
                'type' => 'dropdown',
                'default' => 'like',
                'options' => ['like' => 'like', 'recommend' => 'recommend']
            ],
            'include_share_button' => [
                'title' => 'Share button',
                'description' => 'Add a share button next the like button',
                'type' => 'checkbox',
                'default' => false
            ],
            'custom_css' => [
                'title' => 'Css',
                'description' => 'add custom css classes',
                'type' => 'string',
            ]
        ];
    }

}
