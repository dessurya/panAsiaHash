@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH | Commitee</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sub-public.css') }}">
	<style type="text/css">
		.first-content .bar{
			position: relative;
			float: left;
			width: 25%;
			margin-bottom: 20px;
		}
		.first-content .bar #center{
			position: relative;
			width: 80%;
			margin: 0 auto;

			color: rgb(79,106,74);
		}

		.first-content .bar #center #img{
			position: relative;
			width: 100%;
			height: 250px;

			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.first-content .bar #center #img p{
			position: absolute;
			bottom: 115px;
			left: -65%;
			width: 250px;
			text-align: right;

			padding: 0;
			margin: 0;
			transform: rotate(270deg);

			font-family: 'SourceSansPro Light';
			font-size: 20px;
		}
		.first-content .bar #center h3{
			margin: 0;
			padding: 0;

			font-family: 'SourceSansPro Bold';
			font-size: 24px;
		}
		@media (max-width: 960px) {
			.first-content .bar{
				width: 100%;
			}
			.first-content .bar #center #img p{
				left: -140px;
			}
		}
	</style>
@endsection

@section('body')

	<div class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.png') }}');">
		<img id="das" src="{{ asset('assets/images-base/das.png') }}">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Commitee</h2>
				{{--
				<p id="descript">
					some text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
				</p>
				--}}

				<div class="bar">
					<div id="center">
						<div id="img" style="background-image: url('{{ asset('assets/images-base/commite1.jpg') }}');">
							<p>Chairman</p>
						</div>
						<h3>Long Sheng</h3>
					</div>
				</div>
				<div class="bar">
					<div id="center">
						<div id="img" style="background-image: url('{{ asset('assets/images-base/commite2.jpg') }}');">
							<p>Vice chairman 1</p>
						</div>
						<h3>Cai Ye Zi</h3>
					</div>
				</div>
				<div class="bar">
					<div id="center">
						<div id="img" style="background-image: url('{{ asset('assets/images-base/commite3.jpg') }}');">
							<p>Vice chairman 2</p>
						</div>
						<h3>Da Yu</h3>
					</div>
				</div>
				<div class="bar">
					<div id="center">
						<div id="img" style="background-image: url('{{ asset('assets/images-base/commite4.jpg') }}');">
							<p>Advisor</p>
						</div>
						<h3>King Kong</h3>
					</div>
				</div>
				<div class="bar">
					<div id="center">
						<div id="img" style="background-image: url('{{ asset('assets/images-base/commite5.jpg') }}');">
							<p>Advisor</p>
						</div>
						<h3>Disco Wanker</h3>
					</div>
				</div>
				<div class="bar">
					<div id="center">
						<div id="img" style="background-image: url('{{ asset('assets/images-base/commite6.jpg') }}');">
							<p>Advisor</p>
						</div>
						<h3>Monkey</h3>
					</div>
				</div>
				<div class="bar">
					<div id="center">
						<div id="img" style="background-image: url('{{ asset('assets/images-base/commite7.jpg') }}');">
							<p>Treasurer</p>
						</div>
						<h3>Sa Sa</h3>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	@include('frontend._include.registerShortcut')
@endsection

@section('script')
	
@endsection
