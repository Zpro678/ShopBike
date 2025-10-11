<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="@theme_user('css/bootstrap.css')" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="@theme_user('js/jquery.min.js')"></script>
<!-- Custom Theme files -->
<link href="@theme_user('css/style.css')" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="@theme_user('js/jquery.easydropdown.js')"></script>
<link href="@theme_user('css/nav.css')" rel="stylesheet" type="text/css" media="all"/>
<script src="@theme_user('js/scripts.js')" type="text/javascript"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="@theme_user('js/move-top.js')"></script>
		<script type="text/javascript" src="@theme_user('js/easing.js')"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->

<style>
    body{
        display: flex;
        flex-direction: column;
        min-height: 100vh;
		justify-content: space-between;
    }
	main{
		flex: 1;
		margin: 50px;
	}
</style>
</head>
<body>
			@include('layouts.auth.header')

			@yield('main')
<!---->
			@include('layouts.auth.footer')
<!---->
</body>
</html>

