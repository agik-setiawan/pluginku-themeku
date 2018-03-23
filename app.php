<?php
$plugin_dir=plugin_dir_path(__FILE__);
?>
<div class="wrap" ng-app="Themeku">
	<div class="container-fluid" ng-controller="Main">
		<div class="row">
			<div class="col-md-12">
			<div class="title bg-primary">
				<h4>Themeku Settings</h4>
			</div>
		</div>
		</div>
		<div class="row">

			<div class="col-md-2">
				<div class="list-group">
					<a href="#!/" class="list-group-item list-group-item-action" ng-class="{active:tabActive('/')}">
						General
					</a>
					<!--<a href="#!/header" class="list-group-item list-group-item-action" ng-class="{active:tabActive('/header')}">Header</a>-->
					<a href="#!/footer" class="list-group-item list-group-item-action" ng-class="{active:tabActive('/footer')}">Footer</a>
					<!--<a href="#!/gallery" class="list-group-item list-group-item-action" ng-class="{active:tabActive('/gallery')}">Gallery</a>-->
				</div>
			</div>

			<div class="col-md-10">
				<div class="row">
					<div class="content-r container">
						<div ng-view></div>
					</div>
				</div>
			</div>

			<script type="text/ng-template" id="index.html">
				<?php include_once $plugin_dir.'views/index.php'; ?>
			</script>
			<script type="text/ng-template" id="header.html">
				<?php include_once $plugin_dir.'views/header.php'; ?>
			</script>
			<script type="text/ng-template" id="footer.html">
				<?php include_once $plugin_dir.'views/footer.php'; ?>
			</script>
			<script type="text/ng-template" id="gallery.html">
				<?php include_once $plugin_dir.'views/gallery.php'; ?>
			</script>

		</div>
	</div>
</div>
