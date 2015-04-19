<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class EmbeddedVideo extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Embedded video',
            'description' => 'Facebook embedded video'
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
            'video_url' => [
                'title' => 'Video URL',
                'description' => 'Video URL',
                'type' => 'string'
            ],
            'fullscreen' => [
                'title' => 'Full screen',
                'description' => 'Allow to see video in full screen mode',
                'type' => 'checkbox',
                'default' => true
            ],
            'custom_css' => [
                'title' => 'Css',
                'description' => 'add custom css classes',
                'type' => 'string',
            ]
        ];
    }

}
