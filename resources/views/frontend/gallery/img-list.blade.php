@foreach($Gallery as $list)
<div class="thumbnail">
	<a class="lightbox" href="{{ asset('assets/images/'.$list->picture) }}">
		<div id="display-img" style="background-image: url('{{ asset('assets/images/'.$list->picture) }}');"></div>
	</a>
</div>
@endforeach