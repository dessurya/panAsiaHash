@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH | Register & Payment</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sub-public.css') }}">
	<style type="text/css">
		#registration ol li{
			font-family: 'SourceSansPro Bold';
			color: rgb(103,161,71);
			margin-bottom: 10px;
			font-size: 26px;
		}
		#registration ol li h3{
			margin: 5px 0;
		}
		#registration ol li p{
			color: rgb(160,175,157);
			font-family: 'kanit-light';
			font-size: 16px;
			margin: 5px 0;
		}

		#download-wrapper{
			position: relative;
			width: 80%;
			margin: 40px auto;

			text-align: center;
		}
		#download-wrapper h3{
			color: rgb(103,161,71);
			font-size: 36px;
			font-family: 'SourceSansPro Bold';

			border-bottom: .8px solid rgb(210,233,103);
		}
		#download-wrapper p{
			color: rgb(160,175,157);
			font-family: 'kanit-light';
		}
		#download-wrapper a{
			position: relative;
			display: table;
			width: 450px;
			margin: 0 auto;

			text-decoration: none;
			color: white;
			font-family: 'SourceSansPro Bold';
			font-size: 24px;

			opacity: 1;
			transition: all .51s;
		}
		#download-wrapper a:hover{
			opacity: .8;
		}
		#download-wrapper a div{
			display: table-cell;
			height: 80px;
			vertical-align: middle;
		}
		#download-wrapper a div img{
			height: 60px;
		}
		#download-wrapper a div:nth-child(odd){
			background-color: rgb(103,161,71);
			width: 30%;
		}
		#download-wrapper a div:nth-child(even){
			background-color: rgb(52,83,46);
			width: 70%;
		}
		@media (max-width: 960px) {
			#download-wrapper a{
				width: 250px;
			}
		}
	</style>
}
@endsection

@section('body')

	<div id="registration" class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Register & Payment</h2>
				<p id="descript">
					some text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
				</p>
				<ol>
					@for($a=0; $a<=2; $a++)
					<li>
						<h3>
							Title Here
						</h3>
						<p>
							ome text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
						</p>
					</li>
					@endfor
				</ol>

				<div id="download-wrapper">
					<h3>Registration Form</h3>
					<p>
						ome text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
					</p>
					<div class="text-center">
						<a href="{{ asset('assets/images-base/icon-download.png') }}" download>
							<div>
								<img src="{{ asset('assets/images-base/icon-download.png') }}">
							</div>
							<div>
								DOWNLOAD FORM
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')
	
@endsection
