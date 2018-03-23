themeku.config(function($routeProvider,$locationProvider){
	$routeProvider
	.when('/',{
		templateUrl: 'index.html',
		controller: 'Index'
	})
	.when('/header',{
		templateUrl: 'header.html',
		controller: 'Header'
	})
	.when('/footer',{
		templateUrl: 'footer.html',
		controller: 'Footer'
	})
	.when('/gallery',{
		templateUrl: 'gallery.html',
		controller: 'Gallery'
	})
});

themeku.service('Tab', function($location){
	return {
		active:function(tabActive){
			if($location.path()==tabActive){
				return true;
			}else{
				return false;
			}
		}
	}
});