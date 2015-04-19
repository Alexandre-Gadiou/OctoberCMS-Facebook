<?php

namespace Algad\Facebook\Components;

use Algad\Facebook\Components\AbstractFacebookComponent;

class PageBox extends AbstractFacebookComponent
{

    public function componentDetails()
    {
        return [
            'name' => 'Page box',
            'description' => 'Facebook page plugin'
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
            'width' => [
                'title' => 'Width',
                'description' => 'Box width',
                'type' => 'string'
            ],
            'height' => [
                'title' => 'Height',
                'description' => 'Box height',
                'type' => 'string'
            ],
            'hide_cover_photo' => [
                'title' => 'Hide cover photo',
                'description' => 'Hide facebook page cover photo',
                'type' => 'checkbox',
                'default' => false
            ],
            'show_friends_faces' => [
                'title' => 'Show friends faces',
                'description' => 'Show facebook page friends faces',
                'type' => 'checkbox',
                'default' => true
            ],
            'show_page_posts' => [
                'title' => 'Show page posts',
                'description' => 'Show facebook page posts',
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

    public function getOptions()
    {
        return $this->getProperties();
    }

    public function onRun()
    {
        
    }

}
