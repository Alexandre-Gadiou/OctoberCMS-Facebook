<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class Comments extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Comments',
            'description' => 'Enable people to comment pages using their Facebook account'
        ];
    }

    public function defineProperties()
    {
        return [
            'page_url' => [
                'title' => 'URL',
                'description' => 'URL to comment',
                'type' => 'string',
            ],
            'width' => [
                'title' => 'Width',
                'description' => 'Width of the comments box',
                'type' => 'string'
            ],
            'posts_number' => [
                'title' => 'Number of posts',
                'description' => 'Number of posts to display',
                'type' => 'string',
                'default' => '5'
            ],
            'color' => [
                'title' => 'Color scheme',
                'type' => 'dropdown',
                'default' => 'light',
                'options' => ['light' => 'light', 'dark' => 'dark']
            ],
            'custom_css' => [
                'title' => 'Css',
                'description' => 'add custom css classes',
                'type' => 'string',
            ]
        ];
    }

}
