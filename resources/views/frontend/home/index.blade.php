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
	<div id="banner">
		<img id="banner-laft-img" src="{{ asset('assets/images-base/left-banner.png') }}">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="title-wrapper">
					<h1>Welcome to Changsha Pan Asia Hash 2019</h1>
					<h2>Zhangjiajie National Park, China</h2>
				</div>
				<div id="introduction-wrapper">
					<hr align="left">
					<p>
						We believe China is the best choice due to its beautiful people, culture, cuisine and not to forget its landscapes . We have chosen Zhang Jia Jie for its breathtaking scenery, an amazing view while hashing in the land of avatar. A MUST GO event that is fully supported by the Chinese Tourism Minister/Board/Government.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="introduction" style="background-image: url('{{ asset('assets/images-base/something.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				{{--
				<div id="introduction-top" class="intruduction-content">
					<h3>Some thing Introducttion Title</h3>
					<p>
						Some intruduction in here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					</p>
				</div>
				--}}
				<div id="introduction-bottom" class="intruduction-content">
					<h3>Government Message</h3>
					<p>
						Dear hashers in Asia! We are glad to hear that the Hash House Harriers will hold the 2019 Pan Asia Hash in Zhangjiajie. We represent Zhangjiajie People's. Government, Tourism and Foreign Affairs Commitee and 1.7 million citizens of Zhangjiajie to show sincere gratitude and weam welcome your coming.
					</p>
					<br>
					<div class="text-center">
						<a class="buton-style" href="{{ route('frontend.goverment-message') }}">VIEW ORIGINAL</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="some-info animation-element-scroller" style="background-image: url('{{ asset('assets/images-base/some-info-1.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="positition">
					<div id="midle">
						<h3>Event Location</h3>
						<p>
							Zhangjiajie is famous for grostesque peak and beautiful water. The beautiful natural scenery in the world, unique mountain and humanity bring different eaperiences and shock. Zhangjiajie national forest park that is the first national forest park in China, that is a world geological park and world herietage site as our event field. Pan Asia Hash is the perfect combination of travel plus sports, which organize this and build a bridge of friendship to the word.
						</p>
						<br>
						{{--<a class="buton-style" href="">DETAIL</a>--}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="some-info animation-element-scroller" style="background-image: url('{{ asset('assets/images-base/some-info-2.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<div id="positition">
					<div id="midle">
						<h3>What You Get</h3>
						<p>
							Entrance Fee to Zhang Jia Jie National Park ($45), Goodies Bag, Dinner for 3 day 3 times, Beeeerrr, Entertainment, Etc.
						</p>
						<br>
						{{--<a class="buton-style" href="">DETAIL</a>--}}
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="commite" style="background-image: url('{{ asset('assets/images-base/somesome.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Our Commitee</h2>
				<div id="flip">
					<ul class="flip-items">

						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/commite1.jpg') }}');">
											<div id="bottom">
												<h3>Long Sheng</h3>
												<h4>Chairman</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/commite2.jpg') }}');">
											<div id="bottom">
												<h3>Cai Ye Zi</h3>
												<h4>Vice Chairman 1</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/commite3.jpg') }}');">
											<div id="bottom">
												<h3>Da Yu</h3>
												<h4>Vice chairman 2</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/commite4.jpg') }}');">
											<div id="bottom">
												<h3>King Kong</h3>
												<h4>Advisor</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/commite5.jpg') }}');">
											<div id="bottom">
												<h3>Disco Wanker</h3>
												<h4>Advisor</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/commite6.jpg') }}');">
											<div id="bottom">
												<h3>Monkey</h3>
												<h4>Advisor</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div id="midle">
									<div id="center">
										<div id="bg-img" style="background-image: url('{{ asset('assets/images-base/commite7.jpg') }}');">
											<div id="bottom">
												<h3>Sa Sa</h3>
												<h4>Treasurer</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>


					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="gallery" style="background-image: url('{{ asset('assets/images-base/petern.png') }}');">
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

	<div id="countdown" style="background-image: url('{{ asset('assets/images-base/somethingss.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">

				<div id="top">
					<h2>Countdown to Event</h2>
					<p>Let's jont us on</p>
					<p>Thursday, 7th November 2019 - Sunday, 10th November 2019</p>
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
					<h3>Limited Participant</h3>

					<div class="text-center">
						<a class="buton-style" href="{{ route('frontend.registerPayment') }}">REGISTER NOW</a>
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
				start: 0,
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

	<script type="text/javascript" src="{{ asset('assets/plugin/jquery-bgswitcher-master/jquery.bgswitcher.js') }}"></script>
	<script type="text/javascript">
		$('#banner').bgswitcher({
			images: [
				"{{ asset('assets/images-base/banner.jpg') }}",
				"{{ asset('assets/images-base/banner2.jpg') }}",
				"{{ asset('assets/images-base/banner3.jpg') }}"
			],
			effect: "fade",
			interval: 10000
		});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script type="text/javascript">
		baguetteBox.run('#list-gallery');
	</script>
	<script type="text/javascript">
		// Set the date we're counting down to
		var countDownDate = new Date("November 7, 2019 10:00:00").getTime();

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

	<script type="text/javascript">
		// animate scroll 
			var $animation_elements = $('.animation-element-scroller');
			var $window = $(window);

			function check_if_in_view() {
				var window_height = $window.height();
				var window_top_position = $window.scrollTop();
				var window_bottom_position = (window_top_position + window_height);

				$.each($animation_elements, function() {
					var $element = $(this);
					var element_height = $element.outerHeight();
					var element_top_position = $element.offset().top;
					var element_bottom_position = (element_top_position + element_height);

					//check to see if this current container is within viewport
					if ((element_bottom_position >= window_top_position) &&
					(element_top_position <= window_bottom_position)) {
						$element.addClass('in-view');
					} else {
						$element.removeClass('in-view');
					}
				});
			}

			$window.on('scroll resize', check_if_in_view);
			$window.trigger('scroll');
		// animate scroll 
	</script>
@endsection
