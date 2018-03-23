<?php
require_once(__DIR__.'/request.php');
$plugin_dir_=plugin_dir_path(__FILE__);
function add_plugins_menu(){
	add_menu_page(
		'Pluginku For Themeku',
		'Themeku',
		'manage_options',
		'pluginku',
		'show_page',
		plugins_url('pluginku/assets/img/animal-monkey.png')
	);
}
function show_page(){
	require_once(__DIR__.'/../app.php');
}

add_action('admin_menu','add_plugins_menu');
?>