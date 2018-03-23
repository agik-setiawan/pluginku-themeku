<?php
namespace app\controllers;
use app\Controllers\Controller;
use app\Config;
/**
* 
*/
class FooterController extends Controller
{

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
		$post_data=$_POST['footer'];
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