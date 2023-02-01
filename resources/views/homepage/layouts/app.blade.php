<!doctype html>
<html lang="en">
  <head>
    @yield('header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticons/font/flaticon.css">

    @yield('links')

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    @yield('content')

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>

    <style>
      .header {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1; /* number of lines to show */
            line-clamp: 1; 
        -webkit-box-orient: vertical;
      }
      .description {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2; 
        -webkit-box-orient: vertical;
      }
	  </style>

    <script>
			$(function() {
				$('#summernote').summernote({
					"lineHeight": 1,
					"height": 400,
					"codemirror": {
						"theme": "ambiance"
					},
					"toolbar": [
						['style', ['style']],
						["style", ["bold", "italic", "underline", "clear"]],
						["font", ["strikethrough", "superscript", "subscript"]],
						['fontname', ['fontname']],
						["fontsize", ["fontsize"]],
						["color", ["color"]],
						["para", ["ul", "ol", "paragraph"]],
						["height", ["height"]],
						['table', ['table']],
						['insert', ['link', 'picture', 'video']],
						['view', ['fullscreen', 'codeview', 'help']],
					]
				}).summernote('lineHeight', 120);
			})
		</script>
  </body>
</html>