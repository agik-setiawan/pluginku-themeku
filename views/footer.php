<?php
use app\controllers\FooterController;
$footer=new FooterController;
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
?>
<div class="">
	<h3>Footer</h3>
	<hr>
	<form method="POST" action="<?=admin_url().'admin-post.php?action=footer_data&type=all-update'?>">
		<div class="row">

			<div class="col-md-12">
				<div class="form-group">
					<label>Copyright</label>
					<textarea class="form-control" name="footer[copyright]" rows="4">
						<?=$footer->all('get_one','copyright')['val']?>
					</textarea>
				</div>
				<button class="btn btn-success">Simpan</button>
				<hr>
			</div>
			<div class="line-over"></div>
		</div>
	</form>
</div>