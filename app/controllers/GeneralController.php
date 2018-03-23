<?php
namespace app\controllers;
use app\Controllers\Controller;
use app\Config;
/**
* 
*/
class GeneralController extends Controller
{

/**
* logo
*/
public function logo($data,$type='update'){
	$conn=$this->db();
	if($type=='update'){
		$logo=$data['logo'];
		$update=$conn->prepare("update themeku set val='$logo' where nama='logo_web'");
		$save=$update->execute();
		if($save){
			header("Location: ".wp_get_referer());
		}else{
			header("Location: ".wp_get_referer());
		}
	}
	elseif($type=='get_logo'){
		$conn=$this->db();
		$exists_icon=$conn->query("select val from themeku where nama='logo_web'")->fetch();
		if($exists_icon['val']==''){
			$icon=plugins_url('../../assets/img/kreasisoft.png',__FILE__);	
		}else{
			$icon=$exists_icon['val'];
		}
		return $icon;
	}

}

/**
* general data
*/
public function all($index,$data){
	$conn=$this->db();
	if($index=="get_all"){
		return $conn->query("select val from themeku where index_data='general'")->fetchAll();
	}
	elseif($index=="get_one"){
		return $conn->query("select val from themeku where nama='$data'")->fetch();
	}
	elseif($index=="update"){
		$post_data=$_POST['moto'];
		//return var_dump($post_data);
		foreach ($data as $key => $value) {
			$val=$post_data[$value];
			$update=$conn->prepare("update themeku set val='$val' where nama='$value'");
			$save=$update->execute();
		}
		header("Location: ".wp_get_referer());
	}
}	

}
?>