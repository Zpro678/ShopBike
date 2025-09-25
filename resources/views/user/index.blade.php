@extends('layouts.user.app')
@section('title','Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Home :: w3layouts')

@section('main')
	<!--/banner-->
<div id="cate" class="categories">
	 <div class="container">
		 <h3>CATEGORIES</h3>
		 <div class="categorie-grids">
			 <a href="{{route('user.bicycles')}}"><div class="col-md-4 cate-grid grid1">
				 <h4>FIXED / SINGLE SPEED</h4>
				 <p>Are you ready for the 27.5 Revloution ?</p>
				 <a class="store" href="{{route('user.bicycles')}}">GO TO STORE</a>
			 </div></a>
			 <a href="{{route('user.bicycles')}}"><div class="col-md-4 cate-grid grid2">
				 <h4>PREMIMUM SERIES</h4>
				 <p>Exclusive Bike Components</p>
				 <a class="store" href="{{route('user.bicycles')}}">GO TO STORE</a>
			 </div></a>
			 <a href="{{route('user.bicycles')}}"><div class="col-md-4 cate-grid grid3">
				 <h4>CITY BIKES</h4>
				 <p>Street Playground</p>
				 <a class="store" href="{{route('user.bicycles')}}">GO TO STORE</a>
			 </div></a>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--bikes-->
<div class="bikes">	
		 <h3>POPULAR BIKES</h3>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <img src="@theme_user('images/bik1.jpg')" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>FIXED GEAR<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{route('user.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
				 <img src="@theme_user('images/bik2.jpg')" alt=""/>
				 <div class="bike-info">
						 <div class="model">
							 <h4>BIG BOY ULTRA<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{route('user.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
					 <img src="@theme_user('images/bik3.jpg')" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>ROCK HOVER<span>$300.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{route('user.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
				     <img src="@theme_user('images/bik4.jpg')" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>SANSACHG<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{route('user.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
					 <img src="@theme_user('images/bik5.jpg')" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>JETT MAC<span>$340.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{route('user.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
				      <img src="@theme_user('images/bik6.jpg')" alt=""/>
					  <div class="bike-info">
						 <div class="model">
							 <h4>SANSACHG<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">OPTION</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{route('user.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles')}}">Quick View</a>
					 </div>
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="@theme_user('js/jquery.flexisel.js')"></script>			 
	</div>
</div>
<!---->
<div class="contact">
	<div class="container">
		<h3>CONTACT US</h3>
		<p>Please contact us for all inquiries and purchase options.</p>

	<form onsubmit="submitForm(event)" action="{{ route('user.index') }}" method="POST" 
      class="p-5 shadow-lg rounded-4 bg-white mx-auto my-5" style="max-width: 480px;">
    @csrf
    <h3 class="text-center mb-4 fw-bold text-primary">📩 Liên hệ với chúng tôi</h3>

    <div class="mb-4">
        <label for="title" class="form-label fw-semibold">Tiêu đề</label>
        <input type="text" id="title" name="title" class="form-control form-control-lg w-100" placeholder="Nhập tiêu đề" required>
    </div>

    <div class="mb-4">
        <label for="phone" class="form-label fw-semibold">Số điện thoại</label>
        <input type="text" id="phone" name="phone" class="form-control form-control-lg w-100" placeholder="Nhập số điện thoại" pattern="[0-9]{10}" required>
        <div class="form-text text-muted fst-italic">📌 Số điện thoại phải có đúng 10 chữ số</div>
    </div>

    <div class="mb-4">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" id="email" name="email" class="form-control form-control-lg w-100" placeholder="user@domain.com" required>
    </div>

    <div class="mb-4">
        <label for="content" class="form-label fw-semibold">Nội dung</label>
        <textarea id="content" name="content" class="form-control form-control-lg w-100" rows="5" placeholder="Nhập nội dung tin nhắn..." required></textarea>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg fw-semibold shadow-sm">Gửi ngay 🚀</button>
    </div>
</form>


	</div>
</div>
@endsection
