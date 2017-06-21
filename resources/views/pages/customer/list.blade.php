@extends('layout.template')
@section('title')
LJ | LIST CUSTOMER
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/js/plugins/sweet-alert/sweetalert.css">
<style type="text/css">
	table > tbody > tr > td {
		font-size: 12px !important;
	}
	table > thead > tr > th {
		font-size: 12px !important;
	}
</style>
@endsection
@section('main-js')
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>
@endsection
@section('custom-js')
<script>
	jQuery(document).ready(function($) {
	// Setting datatable defaults
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
	// Basic datatable
	$('.datatable-basic').DataTable({
		"paging":   false,
		"columnDefs": [
		{"targets": 0, "width":"10%" },
		{"targets": 1, "width":"5%" },
		{"targets": 2, "width":"15%" },
		{"targets": 3, "width":"20%" },
		{"targets": 4, "width":"20%" },
		{"targets": 5, "width":"20%" },
		{"targets": 6, "width":"5%" },
		{"targets": 7, "width":"5%" },
		],
		"order": [[ 0, 'asc' ]],
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
		<h5 class="panel-title text-center"><strong>Daftar Toko/Customer PT. Lautan Jati</strong></h5>
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
	</div>
	<table class="table datatable-basic" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th class="text-center">Nama Toko</th>
				<th class="text-center">Kota</th>
				<th class="text-center">Alamat</th>
				<th class="text-center">Nomer Telepon</th>
				<th class="text-center">Handphone</th>
				<th class="text-center">Contact Person</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($customer as $key => $value)
			<tr>
				<td class="text-left">
					{{$value['cust_nm']}}
				</td>
				<td class="text-left">
					{{$value['cust_city']}}
				</td>
				<td class="text-left">
					{{$value['cust_addr1']}}
					@if ($value['cust_addr2']!="")
					<br>{{$value['cust_addr2']}}
					@endif
					@if ($value['cust_addr3']!="")
					<br>{{$value['cust_addr3']}}
					@endif
					
				</td>
				<td class="text-center">
					@if ($value['cust_telephone1']!="")
					{{$value['cust_telephone1']}}
					@endif
					@if ($value['cust_telephone2']!="")
					<br>{{$value['cust_telephone2']}}
					@endif
					@if ($value['cust_telephone3']!="")
					<br>{{$value['cust_telephone3']}}
					@endif
					@if ($value['cust_telephone3']=="" && $value['cust_telephone2']=="" && $value['cust_telephone1'] == "")
					<span class="col-sm-12 text-center">-</span>
					@endif
				</td>
				<td class="text-center">
					@if ($value['cust_phone1']!="")
					{{$value['cust_phone1']}}
					@endif
					@if ($value['cust_phone2']!="")
					<br>{{$value['cust_phone2']}}
					@endif
					@if ($value['cust_phone2']=="" && $value['cust_phone2']=="")
					<span class="col-sm-12 text-center">-</span>
					@endif
				</td>
				<td class="text-center">
					@if ($value['cust_person1']!="")
					<br>{{$value['cust_person1']}}
					@endif
					@if ($value['cust_person2']!="")
					<br>{{$value['cust_person2']}}
					@endif
					@if ($value['cust_person1']=="" && $value['cust_person2']=="")
					<span class="col-sm-12 text-center">-</span>
					@endif
				</td>
				<td class="text-left">
					@if ($value['cust_misc_info'] != "")
					{{$value['cust_misc_info']}}
					@else
					<span class="col-sm-12 text-center">-</span>
					@endif
					
				</td>
				<td class="text-center">
					<div class="input-group col-sm-12" style="display: inline-flex;">
						{!! Form::open(["method"=>"delete",'route'=>['delete.customer', $value['cust_id']], "id"=>"form-delete-customer", "onsubmit"=>"return confirm('Apa anda yakin delete?')"]) !!}
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