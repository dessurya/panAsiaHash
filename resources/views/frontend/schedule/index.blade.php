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
			top: 120px;
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

	<div class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.jpg') }}');">
		<div class="set-wrapper">
			<img id="img" src="{{ asset('assets/images-base/something.png') }}">
			<div id="set-width" class="width-medium">
				<h2 id="title">Schedule</h2>
				
				@for($a=1; $a<=3; $a++)
				<div class="list">
					<h3>0{{ $a }} October</h3>
					<p>
						text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					</p>
				</div>
				<div class="clearfix"></div>
				@endfor

			</div>
		</div>
	</div>

	@include('frontend._include.registerShortcut')

@endsection

@section('script')
	
@endsection
