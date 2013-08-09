<!DOCTYPE HTML>
<html>
  <head>
	<meta charset="utf-8" />
    <title>App Name</title>
    
    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  <body>
	<script src="scripts/lib/labjs/LAB.min.js"></script>
	<script>

	// Scripts folder
	
	//Name Spaces
		var App = {
			Model: {},
			Collection:{},
			View: {},
			Controller: {},
			debug: false
		};
		
	// Libs
		$LAB
			.script('bower_components/jquery/jquery.min.js')
			.script('bower_components/underscore/underscore-min.js')
			.script('bower_components/backbone/backbone-min.js')
			.script('bower_components/bootstrap/dist/js/bootstrap.min.js')
			.script('bower_components/creatable/creatable.js')
			.script('bower_components/creatable/creatable.backbone.js')
			.script('bower_components/jquery-gather/jquery-gather.js')
			.script('bower_components/underscore-prototype/underscore-proto.js')
			
			
	// Views
		.script('scripts/views/dashboard.view.js')
		.script('scripts/views/header.view.js')
		
	// Collections
		.script('scripts/collections/posts.collection.js')
	// Controller
		.script('scripts/controller.js')
	
	</script>
  </body>
</html>