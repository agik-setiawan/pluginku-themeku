themeku.controller('Index',function ($scope,$timeout) {

	tinymce.init({
    selector: 'textarea',
    plugins: "code",
    forced_root_block : ''
  });

	$scope.button=false;

	$scope.ubah_icon=function(){
		$("#btn_img").removeAttr('type');
		$("#mdl_ubah_icon").modal('show');
		$scope.button=false;
	}

	$scope.ubah_gambar=function(){
		$scope.button=true;
		$("#btn_img").attr('type', 'button');
		$("#mdl_ubah_icon").modal('show');
	}

	$("#btn_img").click(function(event) {
		if($scope.button==true){
			$("#mdl_ubah_icon").modal('hide');
			var img=$("input[name=logo]:checked").val();
			$("#img_header_view").attr('src', img);
			$("#img_header").val(img);
		}
	});
		
});