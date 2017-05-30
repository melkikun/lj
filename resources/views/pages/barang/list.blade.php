@extends('layout.template')
@section('title')
LJ | TAMBAH BARANG
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/js/plugins/sweet-alert/sweetalert.css">
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>
@endsection
@section('javascript')
<script>
	jQuery(document).ready(function($) {
		$('#table-barang').DataTable();
	});
</script>
@endsection
@section('content')
<!-- Basic datatable -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
	</div>
	<table class="table datatable-pagination" id="table-barang">
		<thead>
			<tr>
				<th class="text-center">First Name</th>
				<th class="text-center">Last Name</th>
				<th class="text-center">Job Title</th>
				<th class="text-center">DOB</th>
				<th class="text-center">Status</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Marth</td>
				<td><a href="#">Enright</a></td>
				<td>Traffic Court Referee</td>
				<td>22 Jun 1972</td>
				<td><span class="label label-success">Active</span></td>
				<td class="text-center">
					<ul class="icons-list">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-menu9"></i>
							</a>

							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
								<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
								<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
							</ul>
						</li>
					</ul>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<!-- /basic datatable -->
@endsection