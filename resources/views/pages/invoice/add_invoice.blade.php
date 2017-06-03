@extends('layout.template')
@section('title')
LJ | TAMBAH NOTA
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/js/plugins/sweet-alert/sweetalert.css">
@endsection
@section('js')
<script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/autonumeric/autoNumeric.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/pickers/datepicker.js"></script>
@endsection
@section('javascript')
<script>
	jQuery(document).ready(function($) {
		$('#nama').datepicker();
		$('.select-search').select2();
		@if (Session::has("response"))
		@if (Session::get("response") == 1)
		swal("berhasil input", "success", "success");
		@else
		swal("gagal input", "error", "error");
		@endif
		@endif
	});
	function uppercase(param){
		var upper = $('#'+param).val().toUpperCase();
		$('#'+param).val(upper);
	}
</script>
@endsection
@section('content')
<div class="breadcrumb-line"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	<ul class="breadcrumb">
		<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
		<li><a href="form_input_groups.html">Invoice</a></li>
		<li class="active">Tambah Invoice</li>
	</ul>
</div>
<br/>
<div class="panel panel-flat col-sm-6" id="first-p" style="margin-right: 1%; width: 49%;">
	<div class="panel-heading">
		{{-- <h5 class="panel-title">Input group buttons<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5> --}}
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
	</div>

	<div class="panel-body">
		<form class="form-horizontal" action="#">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label class="display-block text-semibold">TANGGAL INVOICE</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label class="display-block text-semibold">NOMER INVOICE</label>
						<div class="input-group">
							<span class="input-group-addon"><b>Rp</b></span>
							<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-xs-12 col-sm12 col-md-12 col-lg-12">
						<label class="display-block text-semibold">WARNA BARANG</label>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">Merah</option>
							<option value="merah">Hijau</option>
							<option value="merah">Kuning</option>
							<option value="merah">Biru</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label class="display-block text-semibold">CONTACT PERSON</label>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">ALI</option>
							<option value="merah">ADI</option>
							<option value="merah">ANI</option>
							<option value="merah">IDA</option>
						</select>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label class="display-block text-semibold">NOMER TELEPON</label>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">08123456789</option>
							<option value="merah">08512345678</option>
							<option value="merah">0215698</option>
							<option value="merah">0253652</option>
						</select>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="panel panel-flat col-sm-6" id="second-p">
	<div class="panel-heading">
		{{-- <h5 class="panel-title">Input group buttons<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5> --}}
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
	</div>

	<div class="panel-body">
		<form class="form-horizontal" action="#">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						<label class="display-block text-semibold">PO NO</label>
						<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						<label class="display-block text-semibold">SALESMAN</label>
						<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						<label class="display-block text-semibold">TERM OF PAYMENT</label>
						<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-xs-12 col-sm12 col-md-12 col-lg-12">
						<label class="display-block text-semibold">WARNA BARANG</label>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">Merah</option>
							<option value="merah">Hijau</option>
							<option value="merah">Kuning</option>
							<option value="merah">Biru</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="form-group">
						<label class="display-block text-semibold">CONTACT PERSON</label>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">ALI</option>
							<option value="merah">ADI</option>
							<option value="merah">ANI</option>
							<option value="merah">IDA</option>
						</select>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="panel panel-flat col-sm-12">
	<div class="panel-heading">
		{{-- <h5 class="panel-title">Input group buttons<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5> --}}
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
	</div>

	<div class="panel-body">
		<table class="table datatable-basic table-bordered table-striped" style="">
			<thead>
				<tr>
					<th class="text-center" rowspan="2"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button></th>
					<th class="text-center" rowspan="2">Nama Barang</th>
					<th class="text-center" rowspan="2">Warna</th>
					<th class="text-center" colspan="3">Ukuran (CM)</th>
					<th class="text-center" colspan="2">QTY</th>
					<th class="text-center" rowspan="2">Total<br>Kubikasi/M<sup>3</sup></th>
					<th class="text-center" rowspan="2">Harga//M<sup>3</sup><br>Unit</th>
					<th class="text-center" rowspan="2">SubTotal</th>
					<th class="text-center" rowspan="2">Keterangan</th>
					<th class="text-center" rowspan="2">Disc<br>(%)</th>
				</tr>
				<tr>
					<th class="text-center">L</th>
					<th class="text-center">P</th>
					<th class="text-center">T</th>
					<th class="text-center">Pcs</th>
					<th class="text-center">Ball</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-minus"></i></button></td>
					<td>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">BARANG PERTAMA</option>
							<option value="merah">BARANG KEDUA</option>
							<option value="merah">BARANG KETIGA</option>
							<option value="merah">BARANG KE EMPAT</option>
						</select>
					</td>
					<td>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">ALI</option>
							<option value="merah">ADI</option>
							<option value="merah">ANI</option>
							<option value="merah">IDA</option>
						</select>
					</td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
				</tr>
				<tr>
					<td><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-minus"></i></button></td>
					<td>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">BARANG PERTAMA</option>
							<option value="merah">BARANG KEDUA</option>
							<option value="merah">BARANG KETIGA</option>
							<option value="merah">BARANG KE EMPAT</option>
						</select>
					</td>
					<td>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">ALI</option>
							<option value="merah">ADI</option>
							<option value="merah">ANI</option>
							<option value="merah">IDA</option>
						</select>
					</td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
				</tr>
				<tr>
					<td><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-minus"></i></button></td>
					<td>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">BARANG PERTAMA</option>
							<option value="merah">BARANG KEDUA</option>
							<option value="merah">BARANG KETIGA</option>
							<option value="merah">BARANG KE EMPAT</option>
						</select>
					</td>
					<td>
						<select class="select-search" name="warna" id="warna">
							<option value="merah">ALI</option>
							<option value="merah">ADI</option>
							<option value="merah">ANI</option>
							<option value="merah">IDA</option>
						</select>
					</td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
					<td><input type="text" class="form-control"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="panel panel-flat col-sm-12">
	<div class="panel-body">
		<button type="button" class="btn btn-primary col-sm-12">SUBMIT</button>
	</div>
</div>
@endsection 