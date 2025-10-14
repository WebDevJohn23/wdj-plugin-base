<?php
// variables
$menuSlug = 'custom-plugin';


function wdj_plugin_base_adminmenu() {
    add_options_page('WDJ Plugin Base', 'WDJ Plugin Base', 'manage_options', 'wdj-plugin-base', 'wdj_plugin_base_adminpage');
}

// adding above function to wordpress
add_action('admin_menu', 'wdj_plugin_base_adminmenu');


// admin page
function wdj_plugin_base_adminpage() {
    echo "<h3>Coming Soon...</h3>";

}
