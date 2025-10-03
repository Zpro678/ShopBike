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
							 <a href="{{route('user.bicycles.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles.bicycles')}}">Quick View</a>
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
							 <a href="{{route('user.bicycles.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles.bicycles')}}">Quick View</a>
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
							 <a href="{{route('user.bicycles.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles.bicycles')}}">Quick View</a>
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
							 <a href="{{route('user.bicycles.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles.bicycles')}}">Quick View</a>
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
							 <a href="{{route('user.bicycles.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles.bicycles')}}">Quick View</a>
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
							 <a href="{{route('user.bicycles.bicycles')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{route('user.bicycles.bicycles')}}">Quick View</a>
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