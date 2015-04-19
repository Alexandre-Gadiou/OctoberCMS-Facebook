<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class EmbeddedPost extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Embedded post',
            'description' => 'Facebook embedded post'
        ];
    }

    public function defineProperties()
    {
        return [
            'width' => [
                'title' => 'Width',
                'description' => 'Box width',
                'type' => 'string'
            ],
            'post_url' => [
                'title' => 'Post URL',
                'description' => 'Facebook post URL',
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
