@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH | Schedule</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sub-public.css') }}">
	<style type="text/css">
		.first-content{
			padding-bottom: 60px;
		}
		.first-content img#img{
			position: absolute;
			left: 0;
			top: 90px;
			height: 540px;
		}
		.first-content .set-wrapper #set-width{
			min-height: 660px;
		}
		.first-content .list{
			position: relative;
			width: 45%;
			text-align: right;
			float: right;
			display: block;
		}
		.first-content .list h3{
			font-size: 26px;
			font-family: 'SourceSansPro Bold';
			color: rgb(103,161,71);
			margin: 10px 0;
		}
		.first-content .list p{
			color: rgb(160,175,157);
			font-family: 'kanit-light';
			margin: 10px 0;
		}

		@media (max-width: 960px) {
			.first-content .set-wrapper #set-width{
				min-height: 0px;
			}
			.first-content{
				padding-bottom: 20px;
			}
			.first-content .list{
				width: 100%;
			}
			.first-content img#img{
				height: 0px;
			}
		}
	</style>
@endsection

@section('body')

	<div class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.png') }}');">
		<img id="das" src="{{ asset('assets/images-base/das.png') }}">
		<div class="set-wrapper">
			<img id="img" src="{{ asset('assets/images-base/something.png') }}">
			<div id="set-width" class="width-medium">
				<h2 id="title">Schedule</h2>
				
				<div class="list">
					<h3>THURSDAY, 7th NOV 2019</h3>
					<p>
						RED DRESS
					</p>
				</div>
				<div class="clearfix"></div>
				<div class="list">
					<h3>FRIDAY, 8th NOV 2019</h3>
					<p>
						WELCOME PARTY
					</p>
				</div>
				<div class="clearfix"></div>
				<div class="list">
					<h3>SATURDAY, 9th NOV 2019</h3>
					<p>
						HASH RUN
					</p>
				</div>
				<div class="clearfix"></div>
				<div class="list">
					<h3>SUNDAY, 10th NOV 2019</h3>
					<p>
						HASH RUN AND FAREWELL PARTY
					</p>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
	</div>

	@include('frontend._include.registerShortcut')

@endsection

@section('script')
	
@endsection
