<?php
/*
Plugin Name: Pluginku
Author: Agik Setiawan
Licence: GPLv2+
*/
require_once(__DIR__.'/config.php');
require_once(__DIR__.'/main/pluginku-function.php');
$plugin_dir=plugin_dir_path(__FILE__);

function scripts_add_head(){
	echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('pluginku/assets/vendor/bower/bootstrap/dist/css/bootstrap.min.css').'">';
	echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('pluginku/assets/css/pluginku.css').'">';
}
add_action('admin_head','scripts_add_head');

function scripts_add_foot(){
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/vendor/bower/jquery/dist/jquery.min.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/vendor/bower/bootstrap/dist/js/bootstrap.min.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/vendor/bower/tinymce/tinymce.min.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/vendor/bower/tinymce/themes/modern/theme.min.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/vendor/bower/angular/angular.min.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/vendor/bower/angular-route/angular-route.min.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/module.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/config.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/services/app.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/controller/main.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/controller/testing.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/controller/index.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/controller/header.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/controller/gallery.js').'"></script>';
	echo '<script type="text/javascript" src="'.plugins_url('pluginku/assets/app/controller/footer.js').'"></script>';
}
add_action('admin_footer','scripts_add_foot');

function load_wp_media(){
	//wp_enqueue_media();
}
add_action('admin_enqueue_scripts','load_wp_media');
?>