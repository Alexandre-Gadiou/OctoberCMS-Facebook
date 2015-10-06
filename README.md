OctoberCMS Facebook Plugin
==========================

This plugin provides the facebook components below : 

- like button
- share button
- follow button
- link button
- send button
- page box
- comments
- embedded video
- embedded post

![alt text](https://github.com/Alexandre-Gadiou/OctoberCMS-Facebook/blob/master/doc/facebook_components_list.png?raw=true "Facebook components list")


Installation
------------

2 methods exist to install this plugin

1) Install with October CMS backend GUI
- Go to the plugin page installation in OctoberCMS : http://localhost:8888/backend/system/updates/install
- Type in the search input : Algad.Facebook, then install the plugin

2) Install from github
- Download the plugin https://github.com/Alexandre-Gadiou/OctoberCMS-Facebook
- Create folder "algad" in plugins folder of october CMS
- Unzip the archive in algad folder
- Rename the folder "OctoberCMS-Facebook" in facebook
- Open October CMS settings in the backend GUI (http://localhost:8080/backend/system/updates)
- Click on Check for updates and force to update.



Prerequisite
------------
Before adding components to your pages, you need to configure your theme by adding at the bottom of each page 
the javascript code (Facebook SDK) below. 

```
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/{{YOUR_LANGUAGE}}/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
```

Replace the variable {{YOUR_LANGUAGE}} by your language (en for english)


Optional (Recommended)
--------
You can also configure in October CMS settings your facebook page URL. 
This facebook plugin takes by default the URL provided in the settings for components.


Usage
-----
After the installation process, you will find new facebook components in your CMS area.
It can be added to any page, layout or partial ... 

The integration works via the following code:

```
{% component 'alias' %}
```

![alt text](https://github.com/Alexandre-Gadiou/OctoberCMS-Facebook/blob/master/doc/facebook_components_integration.png?raw=true "Facebook components integration in october CMS")


Components properties
---------------------

* **Like button**
  * Alias &rarr; name to use for component integration
  * URL &rarr; facebook page to like
  * Layout &rarr; change button layout 
	  * *standard* &rarr; add a sentence "100 people like this page" on the left
	  * *box_count* &rarr; add likes number on the top
	  * *button_count* &rarr; add likes number on left side
	  * *button* &rarr; display a simple like button
  * Action type &rarr; change action type to
	  * *like*
	  * *recommend*
  * Share button &rarr; add on the left side a share button
  * Css &rarr; Customize the component with a CSS class
* **Share button**
  * Alias &rarr; name to use for component integration
  * URL &rarr; facebook page to share
  * Layout &rarr; change button layout 
	  * *box_count* &rarr; add shares number on the top
	  * *button_count* &rarr; add shares number on left side
	  * *button* &rarr; display a simple share button
	  * *icon_link* &rarr; display a share link with facebook icon
	  * *icon* &rarr; display a share icon link
	  * *link* &rarr; display a share link
  * Css &rarr; Customize the component with a CSS class
* **Follow button**
  * Alias &rarr; name to use for component integration
  * URL &rarr; facebook page to follow
  * Layout &rarr; change button layout 
	  * *standard* &rarr; add a sentence "100 people follow this page" on the left 
	  * *box_count* &rarr; add shares number on the top
	  * *button_count* &rarr; add shares number on left side
	  * *button* &rarr; display a simple share button
  * Color scheme
	  * light
	  * dark
  * Show faces &rarr; display faces (standard layout only)
  * Width &rarr; 200 for 200px
  * Css &rarr; Customize the component with a CSS class
* **Send button**
  * Alias &rarr; name to use for component integration
  * URL &rarr; facebook page to send
  * Css &rarr; Customize the component with a CSS class
* **Page link**
  * Alias &rarr; name to use for component integration
  * URL &rarr; facebook page url
  * Size &rarr; size in pixels (20px by default)
  * Css &rarr; Customize the component with a CSS class
* **Page box**
  * Alias &rarr; name to use for component integration
  * URL &rarr; facebook page url
  * Width &rarr; 500 for 500px
  * Height &rarr; 200 for 200px
  * Hide cover photo (on/off)
  * Show friends faces (on/off)
  * Show page posts (on/off)
  * Css &rarr; Customize the component with a CSS class
* **Embedded video**
  * Alias &rarr; name to use for component integration
  * Width &rarr; 500 for 500px
  * Video URL &rarr; facebook video url
  * Full screen (on/off) allow full screen
  * Css &rarr; Customize the component with a CSS class
* **Embedded post**
  * Alias &rarr; name to use for component integration
  * Post URL &rarr; facebook post url
  * Width &rarr; 300 for 300px
  * Css &rarr; Customize the component with a CSS class
* **Comments**
  * Alias &rarr; name to use for component integration
  * URL &rarr; URL to comment on
  * Width &rarr; 300 for 300px
  * Number of posts
  * Color scheme 
	  * light
	  * dark
  * Css &rarr; Customize the component with a CSS class
