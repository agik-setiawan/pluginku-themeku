<?php
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
	<h3>Gallery</h3>
	<div class="row">
		<button class="btn btn-primary btn-sm" id="btn_add">Add Image from Media</button>
		<table class="table table-bordered">
			<tr>
				<th>Action</th>
				<th>File</th>
				<th>Note</th>
				<th>Order</th>
			</tr>
			<tbody>
				<tr>
					
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="mdl">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Image from Media</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class="container">
						<a href="<?=admin_url().'/media-new.php'?>" class="btn btn-primary">Upload Baru</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<?php foreach($images as $img_urls){ ?>
					<div class="col-md-4">
						<img class="img-thumbnail" src="<?=$img_urls?>">
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>