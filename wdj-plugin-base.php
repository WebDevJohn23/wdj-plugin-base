<?php

/*
Plugin Name: WDJ Plugin Base
Plugin URI: https://github.com/WebDevJohn23/wdj-plugin-base
Description: Minimal reusable plugin scaffold.
Version: 1.0.0
Author: Johnathan Julig
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wdj-plugin-base
Update URI: https://github.com/WebDevJohn23/wdj-plugin-base
*/

// Uncomment below to debug

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


// add required files here
require_once('includes/settings.php');



// sets the plugin settings link
function my_plugin_settings_link($links)
{
    // create menu slug .. example: custom-plugin
    $menuSlug = 'wdj-plugin-base';

    $settings_link = '<a href="options-general.php?page=' . $menuSlug . '">Settings</a>';
    array_unshift($links, $settings_link);
    return $links;
}

// changes plugin link settings
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'my_plugin_settings_link');
