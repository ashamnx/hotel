@extends('layouts.default')

@section('content')

	<div class="colorlib-loader"></div>

	<div id="page">

         @include('partials.navbar')

		<aside id="colorlib-hero">

			@include('partials.diningslide')

		</aside>

		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Main Menu</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-1.jpg" class="room image-popup-link" style="background-image: url(images/menu-1.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Organic Yoghurt Panna Cotta</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">25.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-2.jpg" class="room image-popup-link" style="background-image: url(images/menu-2.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Roast Beef (4 sticks)</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">30.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-3.jpg" class="room image-popup-link" style="background-image: url(images/menu-3.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Salted Fried Chicken</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">20.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
				</div>

				<div class="row row-pb-lg">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-4.jpg" class="room image-popup-link" style="background-image: url(images/menu-4.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Organic Yoghurt Panna Cotta</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">25.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-5.jpg" class="room image-popup-link" style="background-image: url(images/menu-5.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Roast Beef (4 sticks)</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">30.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-6.jpg" class="room image-popup-link" style="background-image: url(images/menu-6.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Salted Fried Chicken</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">20.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Desserts Menu</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-7.jpg" class="room image-popup-link" style="background-image: url(images/menu-7.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Organic Yoghurt Panna Cotta</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">25.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-8.jpg" class="room image-popup-link" style="background-image: url(images/menu-8.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Roast Beef (4 sticks)</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">30.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take an Order</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-9.jpg" class="room image-popup-link" style="background-image: url(images/menu-9.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Salted Fried Chicken</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">20.00</span>
							</p>
							<p><a class="btn btn-primary btn-book">Take An Order</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>




@include('partials.scripts')


@stop
