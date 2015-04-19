OctoberCMS Facebook Plugin
==================================

========== INSTALLATION ==========

2 methods exist to install this plugin


1) Install from github

- Download the plugin https://github.com/Alexandre-Gadiou/OctoberCMS-Facebook
- Unzip the archive in plugins folder of october CMS
- Open October CMS settings in the backend GUI (http://localhost:8080/backend/system/updates)
- Click on Check for updates and force to update.


2) Install with October CMS backend GUI

- Type in the search input : Algad.Facebook, then install the plugin


========== PLUGIN INFO ==========

After the installation process, you will find new facebook components in your CMS area.
It can be added to any page, layout or partial ... 

The integration works via the following code:

{% component 'alias' %}


Before adding components to your pages, you need to configure your theme by adding at the bottom of each page 
the javascript code (Facebook SDK) below. 


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/{{YOUR_LANGUAGE}}/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


Replace the variable {{YOUR_LANGUAGE}} by your language (en for english)

You can also configure in October CMS settings your facebook page URL. 
This facebook plugin takes by default the URL provided in the settings for components : 

- like button
- share button
- follow button
- link button
- send button
- page box