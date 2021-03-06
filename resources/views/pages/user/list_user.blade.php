@extends('layout.template')
@section('title')
LJ | LIST USER
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/js/plugins/sweet-alert/sweetalert.css">
@endsection
@section('main-js')
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/tables/datatables/datatables.min.js"></script>
{{-- <script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/forms/selects/select2.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/ui/ripple.min.js"></script>
@endsection
@section('custom-js')
{{-- <script type="text/javascript" src="{{ asset('/') }}assets/js/pages/datatables_basic.js"></script> --}}
<script>
	jQuery(document).ready(function($) {
		$.extend( $.fn.dataTable.defaults, {
			autoWidth: false,
			columnDefs: [{ 
				orderable: false,
				width: '100px',
				targets: [ 5 ]
			}],
			dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
			language: {
				search: '<span>Filter:</span> _INPUT_',
				lengthMenu: '<span>Show:</span> _MENU_',
				paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
			},
			drawCallback: function () {
				$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
			},
			preDrawCallback: function() {
				$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
			}
		});
		$('.datatable-basic').DataTable({
			"paging":false,
			"columnDefs": [
			// { "visible": false, "targets": 0 }
			],
			"order":[[0, "asc"], ["1", "asc"]],
			// "drawCallback": function ( settings ) {
			// 	var api = this.api();
			// 	var rows = api.rows( {page:'current'} ).nodes();
			// 	var last=null;

			// 	api.column(0, {page:'current'} ).data().each( function ( group, i ) {
			// 		if ( last !== group ) {
			// 			$(rows).eq( i ).before(
			// 				'<tr class="group"><td colspan="6">'+group+'</td></tr>'
			// 				);

			// 			last = group;
			// 		}
			// 	} );
			// }
		});
	});
	@if (Session::has("delete"))
	@if (Session::get("delete") == 1)
	alert("berhasil delete");
	@else
	alert("gagal delete");
	@endif
	@endif
</script>
@endsection
@section('content')
<!-- Basic datatable -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title"><strong>Daftar User PT. Lautan Jati</strong></h5>
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
	</div>
	<table class="table datatable-basic table-bordered table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th class="text-center">User Id</th>
				<th class="text-center">User Name</th>
				<th class="text-center">Password</th>
				<th class="text-center">Edit / Hapus</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $key => $value)
			<tr>
				<td class="text-center">
					{{$value['user_id']}}
				</td>
				<td class="text-center">
					{{$value['user_name']}}
				</td>
				<td class="text-center">
					{{$value['user_pass']}}
				</td>
				<td class="text-center">
				<div class="input-group" style="display: inline-flex;">
						{!! Form::open(["method"=>"delete",'route'=>['delete.user', $value['user_id']], "id"=>"form-delete-barang", "onsubmit"=>"return confirm('Apa anda yakin delete?')"]) !!}
						<button class="btn btn-info btn-xs" type="submit"><i class="icon-trash"></i></button>
						{!! Form::close() !!}
						<button class="btn btn-warning btn-xs" type="button"><i class="icon-folder5"></i></button>
					</div><!-- /input-group -->
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<!-- /basic datatable -->
@endsection