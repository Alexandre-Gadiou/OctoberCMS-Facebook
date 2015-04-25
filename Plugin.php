<?php

namespace Algad\Facebook;

use System\Classes\PluginBase;

/**
 * Algad Facebook Plugin Information File.
 */
class Plugin extends PluginBase
{

    /**
     * Algad Bootstrap plugin information.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Facebook Components',
            'description' => 'Facebook components for October CMS',
            'author' => 'Alexandre GADIOU',
            'homepage' => 'http://alexandre-gadiou.appspot.com',
            'icon' => 'icon-facebook-official'
        ];
    }

    public function registerComponents()
    {
        return [
            'Algad\Facebook\Components\LikeButton' => 'facebook_like_button',
            'Algad\Facebook\Components\ShareButton' => 'facebook_share_button',
            'Algad\Facebook\Components\SendButton' => 'facebook_send_button',
            'Algad\Facebook\Components\FollowButton' => 'facebook_follow_button',
            'Algad\Facebook\Components\PageBox' => 'facebook_page_box',
            'Algad\Facebook\Components\Link' => 'facebook_page_link',
            'Algad\Facebook\Components\Comments' => 'facebook_comments_box',
            'Algad\Facebook\Components\EmbeddedVideo' => 'facebook_video',
            'Algad\Facebook\Components\EmbeddedPost' => 'facebook_post'
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'Facebook',
                'description' => 'Facebook settings',
                'category' => 'Social',
                'icon' => 'icon-facebook-official',
                'class' => 'Algad\Facebook\Models\Settings',
                'order' => 500,
                'keywords' => 'facebook'
            ]
        ];
    }

}
