<div class="bikes">
	<h3>POPULAR BIKES</h3>
	<div class="bikes-grids">
		<ul id="flexiselDemo1">
			@foreach ($popular as $item)
			<li>
				<img src="@theme_user('images/'. $item->UrlHinh)" alt="{{ $item->TenSP }}" />
				<div class="bike-info">
					<div class="model">
						<h4>{{ $item->TenSP }}<span>${{ $item->Gia }}</span></h4>
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
			@endforeach
		</ul>
	</div>
</div>

<div class="bikes">
	<h3>NEW ARIVALS</h3>
	<div class="bikes-grids">
		<ul id="flexiselDemo2">
			@foreach ($newArrivals as $item)
			<li>
				<img src="@theme_user('images/'. $item->UrlHinh)" alt="{{ $item->TenSP }}" />
				<div class="bike-info">
					<div class="model">
						<h4>{{ $item->TenSP }}<span>${{ $item->Gia }}</span></h4>
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
			@endforeach
		</ul>
	</div>
</div>


<script type="text/javascript">
	$(window).on('load', function() {
		var cfg = {
			visibleItems: 3,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		};

		// init both sliders
		$("#flexiselDemo1").flexisel(cfg);
		$("#flexiselDemo2").flexisel(cfg);
	});
</script>

<script type="text/javascript" src="@theme_user('js/jquery.flexisel.js')"></script>