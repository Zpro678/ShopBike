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

	<!-- CSS Custom -->
	@yield('css')

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
	<!--webfont-->
	<!-- dropdown -->
	<script src="@theme_user('js/jquery.easydropdown.js')"></script>
	<link href="@theme_user('css/nav.css')" rel="stylesheet" type="text/css" media="all" />
	<script src="@theme_user('js/scripts.js')" type="text/javascript"></script>
	<!--js-->
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="@theme_user('js/move-top.js')"></script>
	<script type="text/javascript" src="@theme_user('js/easing.js')"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!---- start-smoth-scrolling---->
	<script>
		// *********** đem qua controller để xử lí **************
		async function submitForm(event) {
			event.preventDefault();

			const form = event.target;
			const formData = new FormData(form);

			const response = await fetch("{{ route('user.index.index') }}", {
				method: "POST",
				headers: {
					"X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
				},
				body: formData
			});
			// Đọc dữ liệu JSON trả về
			const result = await response.json();
			if (result.success) {

				console.log(result);

				const data = result.data;

				// Hiển thị popup confirm
				alert(
					"Xác nhận thông tin:\n\n" +
					"Title: " + data.title + "\n" +
					"Phone: " + data.phone + "\n" +
					"Email: " + data.email + "\n" +
					"Content: " + data.content
				);
			} else {
				// Hiện popup báo lỗi từ middleware
				alert("Lỗi: " + result.message);
			}
		}
	</script>

</head>

<body>
	<!--banner-->
	@include('layouts.user.header')

	@yield('main')
	<!---->
	@include('layouts.user.footer')
	<!---->
</body>

</html>