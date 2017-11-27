@extends('frontend._layout.basic')

@section('title')
	<title>PAN ASIA HASH | Who's Coming</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sub-public.css') }}">
	<link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

	<style type="text/css">
		#list-coming{
			width: 100%;
		}
		#list-coming thead{
			background-color: rgb(52,83,46);

			color: white;
			font-family: 'SourceSansPro Bold';
			font-size: 24px;
		}
		#list-coming thead tr th:after{
			opacity: 0;
		}
		#list-coming tbody {
			color: rgb(52,83,46);
			font-family: 'SourceSansPro Light';
			font-size: 18px;
		}
		#list-coming tbody tr:nth-child(odd){
			background-color: rgba(179,208,163,0);
		}
		#list-coming tbody tr:nth-child(even){
			background-color: rgba(179,208,163,.5);
		}

		#list-coming tr th,
		#list-coming tr td{
			padding: 10px;
		}

		#list-coming_length.dataTables_length,
		#list-coming_filter.dataTables_filter,
		#list-coming_info.dataTables_info,
		#list-coming_paginate.dataTables_paginate.paging_simple_numbers,
		#list-coming_paginate.dataTables_paginate.paging_simple_numbers ul.pagination li a{
			color: rgb(52,83,46);
			font-family: 'SourceSansPro Light';
			font-size: 18px;
		}
		
		.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
			background-color: rgba(179,208,163,.5);
			border-color: rgba(179,208,163,.9);
		}

		@media (max-width: 960px) {
			#list-coming thead{
				font-size: 16px;
			}
			#list-coming tbody{
				font-size: 12px;
			}

			#list-coming_length.dataTables_length,
			#list-coming_filter.dataTables_filter,
			#list-coming_info.dataTables_info,
			#list-coming_paginate.dataTables_paginate.paging_simple_numbers,
			#list-coming_paginate.dataTables_paginate.paging_simple_numbers ul.pagination li a{
				font-size: 12px;
			}
		}
	</style>
@endsection

@section('body')

	<div class="first-content" style="background-image: url('{{ asset('assets/images-base/petern.jpg') }}');">
		<div class="set-wrapper">
			<div id="set-width" class="width-medium">
				<h2 id="title">Who's Coming</h2>
				<p id="descript">
					some text in here for greating this page thanks.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
				</p>

				<div class="table-responsive">
					<table id="list-coming" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Hashname</th>
								<th>Hashclub</th>
								<th>T-Shirt</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@for ($a=0; $a<=100; $a++)
							<tr>
								<td>{{ $no++ }}</td>
								<td>Name is here</td>
								<td>Hashname is here</td>
								<td>Hashclub is here</td>
								<td>T-Shirt is here</td>
							</tr>
							@endfor
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	@include('frontend._include.registerShortcut')
@endsection

@section('script')
	<script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('backend/vendors/datatables.net-scroller/js/datatables.scroller.min.js') }}"></script>
	<script type="text/javascript">
	$('#list-coming').DataTable({
		"order": false
	});
	</script>
@endsection
