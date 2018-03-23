<?php
use app\controllers\GeneralController;
use app\controllers\FooterController;

add_action( 'admin_post_general_data', 'admin_general_data' );
function admin_general_data() {
	$generalController=new GeneralController;
	$get=$_GET;
	$data=$_POST;
	
	switch ($get['type']) {
		case 'logo':
			return $generalController->logo($data,'update');
			break;
		case 'all':
			return $generalController->all('get_all',[]);
			break;
		case 'all-update':
			return $generalController->all('update',['moto1','moto2','background_lp_header']);
			break;
	}
}

add_action( 'admin_post_footer_data', 'admin_footer_data' );
function admin_footer_data() {
	$generalController=new FooterController;
	$get=$_GET;
	$data=$_POST;
	
	switch ($get['type']) {
		case 'logo':
			return $generalController->logo($data,'update');
			break;
		case 'all':
			return $generalController->all('get_all',[]);
			break;
		case 'all-update':
			return $generalController->all('update',['copyright']);
			break;
	}
}
?>