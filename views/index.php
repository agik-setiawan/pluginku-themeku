<?php
use app\controllers\GeneralController;
$general=new GeneralController;
$query_images_args = array(
	'post_type'      => 'attachment',
	'post_mime_type' => 'image',
	'post_status'    => 'inherit',
	'posts_per_page' => - 1,
);
$query_images = new WP_Query( $query_images_args );

$images = array();
foreach ( $query_images->posts as $image ) {
	$imgs[]=$image;
	$images[] = wp_get_attachment_url( $image->ID );
}
$logo=$general->logo([],"get_logo");
$moto1=$general->all("get_one","moto1")['val'];
$moto2=$general->all("get_one","moto2")['val'];
$header_img=$general->all("get_one","background_lp_header")['val'];

if($header_img=="" || $header_img==null){
$header_img=plugins_url('../sample/img/header.jpg"',__FILE__);	
}

?>
<div class="">
	<h3>General</h3>
	<hr>
	<form method="POST" action="<?=admin_url().'admin-post.php?action=general_data&type=all-update'?>">
	<div class="row">
<div class="col-md-6">
	<div class="form-group">
		<label>Logo Website</label>
		<br>
		<img width="100" class="img-responsive" src="<?= $logo ?>">
		<hr>
		<button type="button" class="btn btn-sm btn-danger" ng-click="ubah_icon()">Ubah Logo</button>
	</div>
	<div class="form-group">
		<label>Moto 1</label>
		<textarea name="moto[moto1]" class="form-control" rows="3"><?=$moto1?></textarea>
		<hr>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Moto 2</label>
		<textarea name="moto[moto2]" class="form-control" rows="3"><?=$moto2?></textarea>
		<hr>
	</div>
</div>
	</div>

<div class="row">
	<div class="col-md-12">
		<label>Header Image</label><br>
		<img id="img_header_view" class="img-responsive" width="500" src="<?=$header_img?>">
		<input type="hidden" id="img_header" name="moto[background_lp_header]" value="">
		<hr>
		<button type="button" class="btn btn-sm btn-danger" ng-click="ubah_gambar()">Ubah Gambar</button>
	</div>
</div>
<hr>

	<button class="btn btn-sm btn-success">Simpan</button>
	</form>
	<br>
	<div class="line-over"></div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="mdl_ubah_icon">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<form method="POST" action="<?=admin_url().'admin-post.php?action=general_data&type=logo'?>">
			<div class="modal-header">
				<h5 class="modal-title">Add Image from Media</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class="container">
						<a href="<?=admin_url().'/media-new.php'?>" class="btn btn-danger">Upload Baru</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<?php foreach($images as $img_urls){ ?>
					<div class="col-md-4">
						 <input class="form-check-input" type="radio" name="logo" value="<?=$img_urls?>">
						<img class="img-thumbnail" src="<?=$img_urls?>">
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="modal-footer">
				<button id="btn_img" class="btn btn-primary">Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>