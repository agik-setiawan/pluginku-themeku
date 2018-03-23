themeku.controller('Footer',function ($scope) {
	tinymce.init({
    selector: 'textarea',
    plugins: "code",
    forced_root_block : ''
  });
})