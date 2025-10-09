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
<div class="banner-bg banner-bg1">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="{{route('user.index.index')}}"><img src="@theme_user('images/logo.png')" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="{{route('user.bicycles.bicycles')}}">BICYCLES</a>
							  <ul class="dropdown2">
									<li><a href="{{route('user.bicycles.bicycles')}}">FIXED / SINGLE SPEED</a></li>
									<li><a href="{{route('user.bicycles.bicycles')}}">CITY BIKES</a></li>
									<li><a href="{{route('user.bicycles.bicycles')}}">PREMIMUN SERIES</a></li>												
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="{{route('user.parts.parts')}}">PARTS</a>
							 <ul class="dropdown2">
									<li><a href="{{route('user.parts.parts')}}">CHAINS</a></li>
									<li><a href="{{route('user.parts.parts')}}">TUBES</a></li>
									<li><a href="{{route('user.parts.parts')}}">TIRES</a></li>
									<li><a href="{{route('user.parts.parts')}}">DISC BREAKS</a></li>
							  </ul>
						 </li>      
						 <li class="dropdown1"><a href="{{route('user.accessories.accessories')}}">ACCESSORIES</a>
							 <ul class="dropdown2">
									<li><a href="{{route('user.accessories.accessories')}}">LOCKS</a></li>
										<li><a href="{{route('user.accessories.accessories')}}">HELMETS</a></li>
										<li><a href="{{route('user.accessories.accessories')}}">ARM COVERS</a></li>
										<li><a href="{{route('user.accessories.accessories')}}">JERSEYS</a></li>
							  </ul>
						 </li>               
						 <li class="dropdown1"><a href="{{route('user.404.404')}}">EXTRAS</a>
							 <ul class="dropdown2">
									<li><a href="{{route('user.404.404')}}">CLASSIC BELL</a></li>
									<li><a href="{{route('user.404.404')}}">BOTTLE CAGE</a></li>
									<li><a href="{{route('user.404.404')}}">TRUCK GRIP</a></li>
							  </ul>
						 </li>

						  

						  {{-- Login/Logout --}}
						 @if (session()->has('user_id'))  {{-- Đã đăng nhập --}}
						 <a class="shop" href="{{route('user.cart.cart')}}"><img src="@theme_user('images/cart.png')" alt=""/></a>
						     <li class="dropdown1">
						         <a href="#">Xin chào, {{ session('current_user')->HoTen }}!</a>
						     </li>
						     <li class="dropdown1">
						         <a href="{{route('auth.logout')}}">Đăng xuất</a>
						     </li>
						 @else  {{-- Chưa đăng nhập --}}
						     <li class="dropdown1">
							         <a href="{{route('auth.login')}}">Login</a>
						     </li>
							 <a class="shop" href="{{route('user.cart.cart')}}"><img src="@theme_user('images/cart.png')" alt=""/></a>
						 @endif
						 {{-- End Login/Logout --}}

					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>HANDMADE BICYCLE</h1></li>
								<li><h1>SPEED BICYCLE</h1></li>	
								<li><h1>MOUINTAIN BICYCLE</h1></li>	
						  </ul>
						  <p>You <span>create</span> the <span>journey,</span> we supply the <span>parts</span></p>
						  <a class="morebtn" href="{{route('user.bicycles.bicycles')}}">SHOP BIKES</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="@theme_user('images/scroll.png')" alt=""/></a>
	 </div>				 
</div>
