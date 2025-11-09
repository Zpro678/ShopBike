
<div class="bike-parts acces">
	<div class="top">
		<ul>
			<li><a href="{{route('user.index.index')}}">home</a></li>
			<li><a href="#"> / </a></li>
			<li><a href="#">accessories</a></li>
		</ul>
	</div>

	<div class="bike-apparels">
		@include('user.accessories.partials_accessories.part1')
		@include('user.accessories.partials_accessories.part2')
		@include('user.accessories.partials_accessories.part3')
		@include('user.accessories.partials_accessories.part4')
	</div>
</div>
