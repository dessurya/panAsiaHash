@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH | Register & Payment</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sub-public.css') }}">
	<style type="text/css">
		.first-content{
			padding-bottom: 25px;
		}
		#content{
			color: rgb(79,106,74);
			font-family: 'SourceSansPro Light';
			font-size: 18px;
			line-height: 1.6;
		}

		#content h3{
			font-size: 26px;
		}

		#content ul li{
			margin: 10px 0;
		}

		#content h3,
		#content strong{
			font-family: 'SourceSansPro Bold';
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
			margin-top: 55px;

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
			height: 40px;
		}
		#download-wrapper a div:nth-child(odd){
			background-color: rgb(103,161,71);
			width: 20%;
		}
		#download-wrapper a div:nth-child(even){
			background-color: rgb(52,83,46);
			width: 80%;
		}
		@media (max-width: 960px) {
			#download-wrapper a{
				width: 250px;
			}
		}
	</style>

@endsection

@section('body')

	<div id="registration" class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.png') }}');">
		<img id="das" src="{{ asset('assets/images-base/das.png') }}">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Register & Payment</h2>

				<div id="content">
					<h3>
						The Chairman of Pan Asia Changsha HHH China has opened registration for Panasia Hash 2019
					</h3>
					
					<p>
						<strong>Dear Hashers,</strong>
					</p>
					<p>
						China is making a bid for Pan Asia Hash 2019 to be held from 7th - 10th November 2019 in ZHANGJIAJIE NATIONAL FOREST PARK. We believe China is the best choice due to its beautiful people, culture, cuisine and not to forget its landscapes . We have chosen Zhang Jia Jie for its breathtaking scenery, an amazing view while hashing in the land of avatar. A MUST GO event that is fully supported by the Chinese Tourism Minister / Board / Government.
					</p>
					<p>
						<strong>
							The proposed event is as followed: 
						</strong>
					</p>

					<ul>
						<li>
							Thursday, 7th November 2019
							<br>
							<strong>
								RED DRESS
							</strong>
						</li>
						<li>
							Friday, 8th November 2019
							<br>
							<strong>
								WELCOME PARTY
							</strong>
						</li>
						<li>
							Saturday, 9th November 2019
							<br>
							<strong>
								HASH RUN
							</strong>
						</li>
						<li>
							Sunday, 10th November 2019
							<br>
							<strong>
								HASH RUN AND FAREWELL PARTY
							</strong>
						</li>
					</ul>

					<p>
						<strong>
							Registration fee :
						</strong>
					</p>

					<ul>
						<li>
							USD 125 = RM550 = RMB850   till 31th Dec 2017
						</li>
						<li>
							USD 150 = RM670 = RMB1000  till 31th June 2018
						</li>
						<li>
							USD 175 = RM780 = RMB1170  till 31th Dec 2018
						</li>
						<li>
							USD 200 = RM900 = RMB1340  till 31 th June 2019
						</li>
						<li>
							USD 250 = RM1120 = RMB1670 till Event
						</li>
					</ul>

					<p>
						<strong>
							Payment can be made to:
						</strong>
					</p>

					<ul>
						<li>
							<strong>
								China:
							</strong>
							<br>
							Account with institution : China Construction Bank Hunan Branch
							<br>
							A/C NO. 6550590121
							<br>
							SWIFT : PCBCCNBJHUX
							<br>
							Beneficiary's name and A/C No.WU SONG 6236682920010383717
						</li>
						<li>
							<strong>
								Malaysia:
							</strong>
							<br>
							CIMB BANK
							<br>
							No: 7041520814
							<br>
							Name: ONG LIE TJIEN @ ONG
						</li>
						<li>
							<strong>
								Indonesia:
							</strong>
							<br>
							BCA
							<br>
							No: 1463487999
							<br>
							Name : Supriady 
						</li>
					</ul>

					<p>Adviser: King Kong (Mr Liem Chie An)</p>
					<p>Chairman: Long Sheng (龙胜)</p>

					<p>To register or any queries, please email us at changshahhh@yahoo.com</p>
				</div>

				<div id="download-wrapper">
					<h3>Registration Form</h3>
					<div class="text-center">
						<a href="{{ asset('assets/form/reg-individual2.pdf') }}" download>
							<div>
								<img src="{{ asset('assets/images-base/icon-download.png') }}">
							</div>
							<div>
								INDIVIDUAL REGISTRATION
							</div>
						</a>
					
						<a href="{{ asset('assets/form/reg-group2.pdf') }}" download>
							<div>
								<img src="{{ asset('assets/images-base/icon-download.png') }}">
							</div>
							<div>
								GROUP REGISTRATION
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
