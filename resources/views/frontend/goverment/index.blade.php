@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH | Goverment Message</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sub-public.css') }}">
@endsection

@section('body')

	<div class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.png') }}');">
		<img id="das" src="{{ asset('assets/images-base/das.png') }}">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Goverment Message</h2>
				{{--
				<p id="descript">
					some text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
				</p>
				--}}
				<div class="text-center">
					<img src="{{ asset('assets/images-base/government-massage.png') }}" style="margin: 40px auto; width: 80%;">
				</div>
			</div>
		</div>
	</div>

	@include('frontend._include.registerShortcut')

@endsection

@section('script')
	
@endsection
