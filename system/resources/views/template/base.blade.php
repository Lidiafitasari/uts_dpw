<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>bautyBlog| seputar dunia kecantikan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<link href="{{url('public')}}/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" id="camera-css"  href="{{url('public')}}/css/camera.css" type="text/css" media="all">
<link href="{{url('public')}}/css/bootstrap.css" rel="stylesheet">
<link href="{{url('public')}}/css/theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/css/skins/tango/skin.css" />
<link href="{{url('public')}}/css/bootstrap-responsive.css" rel="stylesheet">

<script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->    
</head>
    @include('template.section.header')
    <!--page_container-->
    <div class="page_container">

        @yield('content')

    </div>
    <!--//page_container-->
    @include('template.section.footer')
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/camera.js"></script>
    <script src="{{url('public')}}/js/bootstrap.js"></script>
    <script src="{{url('public')}}/js/superfish.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/myscript.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			//Slider
			$('#camera_wrap_1').camera();
			
			//Featured works & latest posts
			$('#mycarousel, #mycarousel2, #newscarousel').jcarousel();													
		});		
	</script>
</body>
</html>

