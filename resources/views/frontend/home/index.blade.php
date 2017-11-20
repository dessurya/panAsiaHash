@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/owl-carousel/owl.theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/owl-carousel/owl.transitions.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/jquery-flipster-master/jquery.flipster.min.css') }}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">


	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('body')
	<div id="banner" style="background-image: url('{{ asset('assets/images-base/banner.jpg') }}');">
		<img id="banner-laft-img" src="{{ asset('assets/images-base/left-banner.png') }}">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="title-wrapper">
					<h1>CHANGSA PAN ASIA HASH 2019</h1>
					<h2>Zhangjiajie National Parh, China</h2>
				</div>
				<div id="introduction-wrapper">
					<hr align="left">
					<p>
						Some intruduction in here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="introduction" style="background-image: url('{{ asset('assets/images-base/something.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="introduction-top" class="intruduction-content">
					<h3>Some thing Introducttion Title</h3>
					<p>
						Some intruduction in here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					</p>
				</div>
				<div id="introduction-bottom" class="intruduction-content">
					<h3>Some thing Introducttion Title</h3>
					<p>
						Some intruduction in here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<br>
					<div class="text-center">
						<a class="buton-style" href="">VIEW ORIGINAL</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="some-info" style="background-image: url('{{ asset('assets/images-base/some-info-1.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="positition">
					<div id="midle">
						<h3>Some thing Introducttion Title</h3>
						<p>
							Some intruduction in here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</p>
						<br>
						<a class="buton-style" href="">RESERVASI</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="some-info" style="background-image: url('{{ asset('assets/images-base/some-info-2.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="positition">
					<div id="midle">
						<h3>Some thing Introducttion Title</h3>
						<p>
							Some intruduction in here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</p>
						<br>
						<a class="buton-style" href="">RESERVASI</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="commite" style="background-image: url('{{ asset('assets/images-base/banner.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Our Commitee</h2>
				<div id="flip">
					<ul class="flip-items">
						@for($a=0; $a<=6; $a++)
						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/user.png') }}');">
											<div id="bottom">
												<h3>Name {{ $a }}</h3>
												<h4>some thing</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						@endfor
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="gallery" style="background-image: url('{{ asset('assets/images-base/petern.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="title">
					<div class="hr bar">
						<hr>
					</div>
					<div class="name bar">
						<h2>Gallery</h2>
					</div>
					<div class="hr bar">
						<hr>
					</div>
				</div>

			</div>
			<div id="list-gallery">
				@foreach($Gallery as $list)
				<div class="thumbnail">
					<a class="lightbox" href="{{ asset('assets/images/'.$list->picture) }}">
						<div id="display-img" style="background-image: url('{{ asset('assets/images/'.$list->picture) }}');"></div>
					</a>
				</div>
				@endforeach
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div id="countdown" style="background-image: url('{{ asset('assets/images-base/banner.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">

				<div id="top">
					<h2>Countdown to Event</h2>
					<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
					<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Lorem Ipsum </p>
				</div>

				<div class="float">
					<div id="time">
						<p>
							DAYS
						</p>
					</div>
					<div id="count" class="days">
						<p>
							
						</p>
					</div>
				</div>

				<div class="float">
					<div id="time">
						<p>
							HOURS
						</p>
					</div>
					<div id="count" class="hours">
						<p>
							
						</p>
					</div>
				</div>

				<div class="float">
					<div id="time">
						<p>
							MINUTES
						</p>
					</div>
					<div id="count" class="minutes">
						<p>
							
						</p>
					</div>
				</div>

				<div class="float">
					<div id="time">
						<p>
							SECONDS
						</p>
					</div>
					<div id="count" class="seconds">
						<p>
							
						</p>
					</div>
				</div>



				<div class="clearfix"></div>

				<div id="bottom">
					<h3>Limited participant availabiliyt</h3>

					<div class="text-center">
						<a class="buton-style" href="">REGISTER NOW</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('assets/plugin/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/jquery-flipster-master/jquery.flipster.min.js') }}"></script>
	<script type="text/javascript">
		// flipster
			var myFlipster = $("#flip").flipster({
				style: 'carousel',
				keyboard: true,
				touch: true,
				loop: true,
				scrollwheel: false,
				spacing: -0.1,
				nav: false,
				buttons:   true,
				// buttonPrev: "<img src='{{ asset('assets/images-base/chevron-left.png') }}'>",
				// buttonNext: "<img src='{{ asset('assets/images-base/chevron-right.png') }}'>",
				autoplay: 5000,
			});

			$('button.flipster__button.flipster__button--prev').html("<img src='{{ asset('assets/images-base/chevron-left.png') }}'>");
			$('button.flipster__button.flipster__button--next').html("<img src='{{ asset('assets/images-base/chevron-right.png') }}'>");

		// flipster
		// owl
			// $(".commite-owl.width-medium").owlCarousel({
			// 	navigation : true,
			// 	items: 3,
			// 	// itemsMobile: 1,
			// 	center: true,
			// 	loop: true,
			// 	singleItem:false,
			// 	pagination:false,
			// 	autoPlay: false,
			//     stopOnHover:false,
			//     afterAction: function(el){
			// 	//remove class active
			// 	this
			// 	.$owlItems
			// 	.removeClass('active')

			// 	//add class active
			// 	this
			// 	.$owlItems //owl internal $ object containing items
			// 	.eq(this.currentItem + 1)
			// 	.addClass('active')    
			// 	},
			// 	navigationText : [
			// 		"<img src='{{ asset('assets/images-base/chevron-left.png') }}'>",
			// 		"<img src='{{ asset('assets/images-base/chevron-right.png') }}'>"
			// 	]
			// });
		// owl
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script type="text/javascript">
		baguetteBox.run('#list-gallery');
	</script>
	<script type="text/javascript">
		// Set the date we're counting down to
		var countDownDate = new Date("Nov 30, 2017 10:00:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		// Get todays date and time
		var now = new Date().getTime();

		// Find the distance between now an the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Output the result in an element with id="demo"
		$("#countdown .float #count.days p").text(days);
		$("#countdown .float #count.hours p").text(hours);
		$("#countdown .float #count.minutes p").text(minutes);
		$("#countdown .float #count.seconds p").text(seconds);

		// If the count down is over, write some text 
		if (distance < 0) {
			clearInterval(x);
			$("#countdown .float #count.days p").text('0');
			$("#countdown .float #count.hours p").text('0');
			$("#countdown .float #count.minutes p").text('0');
			$("#countdown .float #count.seconds p").text('0');
			}
		}, 1000);
	</script>
@endsection
