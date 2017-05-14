<?php

/**
 * @package FusionCMS
 * @version 6.0
 * @author Jesper Lindström
 * @author Xavier Geerinck
 * @link http://fusion-hub.com
 */

/*
|--------------------------------------------------------------------------
| ACP security code
|--------------------------------------------------------------------------
|
| An additional password to add another layer of security
|
*/
$config['security_code'] = 28564;

/*
|--------------------------------------------------------------------------
| Theme name
|--------------------------------------------------------------------------
|
| Must be located in application/views/NAME and must contain a valid theme manifest
|
*/
$config['theme'] = "default";

/*
|--------------------------------------------------------------------------
| Website title
|--------------------------------------------------------------------------
*/
$config['title'] = "Asmodeos WoW 4.3.4 | International World Of Warcraft";

/*
|--------------------------------------------------------------------------
| Server name
|--------------------------------------------------------------------------
*/
$config['server_name'] = "Asmodeos WoW International";

/*
|--------------------------------------------------------------------------
| Realmlist
|--------------------------------------------------------------------------
*/
$config['realmlist'] = "logon.asmodeos-wow.tk";

/*
|--------------------------------------------------------------------------
| Use rewrite engine
|--------------------------------------------------------------------------
|
| Whether to hide index.php from the URL or not
| Requires Apache module "rewrite_module", to enable it remove the # in
| front of "LoadModule rewrite_module modules/mod_rewrite.so" in the Apache
| config file "httpd.conf"
|
*/
$config['rewrite'] = true;

/*
|--------------------------------------------------------------------------
| SMTP server
|--------------------------------------------------------------------------
|
| If you don't have a SMTP server put it to false. The password recovery
| will be disabled if you disable this.
|
*/
$config['has_smtp'] = 1;

/*
|--------------------------------------------------------------------------
| Disabled expansions
|--------------------------------------------------------------------------
|
| You may disable expansions by their expansion ids, in case you're
| running a WoTLK server and don't want accounts to have Cataclysm
| expansion enabled.
|
| array(3) would disable Cataclysm while array(2,3) would disable both
| WoTLK and Cataclysm.
|
*/
$config['disabled_expansions'] = array();

/*
|--------------------------------------------------------------------------
| Custom header image
|--------------------------------------------------------------------------
*/
$config['header_url'] = false;

/*
|--------------------------------------------------------------------------
| Image slider module
|
| ['slider'] Enable or disable slider
| ['slider_home'] Hide slider from any page except of 'Home'
| ['slider_intveral'] How long the delay should be between the images (in milliseconds, default is 3000 (3 seconds))
| ['slider_style'] Animation style (leave blank for "random"):
|
|	2D:
|		bars
|		blinds
|		blocks
|		blocks2
|		concentric
|		dissolve requires mask support
|		slide
|		warp
|		zip
|	3D:
|		bars3d
|		blinds3d
|		cube
|		tiles3d
|		turn
|
|--------------------------------------------------------------------------
*/
$config['slider'] = true;
$config['slider_home'] = true;
$config['slider_interval'] = 5000;
$config['slider_style'] = false;

/*
|--------------------------------------------------------------------------
| Enable vote reminder popup
|--------------------------------------------------------------------------
|
| ['vote_reminder'] Whether or not to display a popup message that reminds the users to vote
| every (by default) 12 hours.
|
| ['reminder_interval'] How often the reminder should be displayed, in seconds
| Default is 60 * 60 * 12, which represents 12 hours
|
*/
$config['vote_reminder'] = 0;
$config['vote_reminder_image'] = "/images/misc/banner.jpg";
$config['reminder_interval'] = 4218750;

/*
|--------------------------------------------------------------------------
| Search engine related
|--------------------------------------------------------------------------
|
| ['keywords'] Content keywords, separated by comma
| ['description'] Brief description of your site
|
*/
$config['keywords'] = "wow, world of warcraft, legion, warcraft, wow legion, , patch 7.2, nixxiom world of warcraft, pvp, top 10, mmorpg, wow 7.2, blizzard, video game (industry), countdown, thelazypeon, raiding, top 5, wow machinima, legion most damage class, nixxiom top 10, tomb of sargeras raid, raiding in wow, raiding in world of warcraft, 10 types of raiders in world of warcraft, raids, dungeons, race, damage, dps, healer, tank, best, whats, best wow healer, best wow dps, what class is best tank in legion, whats the best dps in legion, legion best healer, nixxiom countdown, Warmane, WoW, World of Warcraft, Warcraft, Private Server, Private WoW Server, WoW Server, Private WoW Server, wow private server, wow server, wotlk server, cataclysm private server, wow cata server, best free private server, largest private server, wotlk private server, blizzlike server, mists of pandaria, mop, cataclysm, cata, anti-cheat, sentinel anti-cheat, warden";
$config['description'] = "Private International Server of World of Warcraft Cataclysm Patch 4.3.4 | Fully Scripted, Online 24/7 FREE";

/*
|--------------------------------------------------------------------------
| Use Content Delivery Network for Javascript libraries
|--------------------------------------------------------------------------
|
| Reduce load and improve loading times by enabling this.
| If you're on a LAN environment put it to false, otherwise
| the website won't load since it relies on those libraries.
|
*/
$config['cdn'] = 0;

/*
|--------------------------------------------------------------------------
| Use FusionCMS tooltip system instead of WoWHead tooltips
|--------------------------------------------------------------------------
|
| Put to false if you mainly have "blizzlike" items.
|
*/
$config['use_fcms_tooltip'] = true;

/*
|--------------------------------------------------------------------------
| Use Smileys
|--------------------------------------------------------------------------
|
| This setting goes to where your smiley folder is, if you 
| change the emoticons in it then don't forget to change 
| the smileys.php
|
*/
$config['smiley_path'] = "application/images/emoticons/";


/*
|--------------------------------------------------------------------------
| Enable Google Analytics
|--------------------------------------------------------------------------
|
| In case you want to track your visitor statistics more deeply,
| Google Analytics can be enabled by entering your Tracking ID here
| (found on the "Admin" page)
|
| Set it to false if you don't use it
|
| Example: UA-XXXXXXXX-1, format may differ
|
*/
$config['analytics'] = "UA-52696612-3";

/*
|--------------------------------------------------------------------------
| Cache system
|--------------------------------------------------------------------------
|
| Wether or not the cache should be enabled. Disable only for development.
| Turning it on will improve performance drastically.
|
*/
$config['cache'] = true;