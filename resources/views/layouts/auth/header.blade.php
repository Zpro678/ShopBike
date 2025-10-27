<script src="@theme_user('js/responsiveslides.min.js')"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div style="margin-top: 40px;" class="container">
    <a class="morebtn" href="{{ route('user.index.index') }}">Home</a>
</div>
