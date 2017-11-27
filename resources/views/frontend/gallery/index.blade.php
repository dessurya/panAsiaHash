@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH | Gallery</title>
@endsection

@section('meta')
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/gallery.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sub-public.css') }}">
@endsection

@section('body')

	<div id="gallery" class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Gallery</h2>
				<p id="descript">
					some text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
				</p>
				<div id="list-gallery">
					@include('frontend.gallery.img-list')
					<div id="appendAjax"></div>
					<div class="clearfix"></div>
					<div class="centered">
						<label id="loadMoreData" class="buton-style" style="cursor: pointer;">SHOW MORE</label>
						<div class="ajax-load text-center" style="display:none;">
							<p>
								<img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More...
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('frontend._include.registerShortcut')
@endsection

@section('script')
	<script type="text/javascript">
		var page = 1;
		$("label#loadMoreData").click(function(){
		    page++;
		        loadMoreData(page);
		    	window.setTimeout(function() {
					    makeBox();
				    }, 250);
		});

		function loadMoreData(page){
		  $.ajax(
		        {
		            url: '?page=' + page,
		            type: "get",
		            beforeSend: function()
		            {
		                $('.ajax-load').show();
		            }
		        })
		        .done(function(data)
		        {
		            if(!data.html){
		                $('.ajax-load').hide();
			            $('label#loadMoreData').hide();
		                return;
		            }
		            $('.ajax-load').hide();
		            $("#appendAjax").append(data.html);
		      //       window.setTimeout(function() {
					   //  $('.recipe-show.animation-element').addClass('in-view');
				    // }, 50);
		        })
		        .fail(function(jqXHR, ajaxOptions, thrownError)
		        {
		              alert('server not responding...');
		        });

		}
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script type="text/javascript">
		baguetteBox.run('#list-gallery');

		function makeBox() {
			baguetteBox.run('#list-gallery');
		}
	</script>
	
@endsection
