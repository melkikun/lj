@extends('layouts.template')
@section('title')
Tambah Barang
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/plugins/select2/css/select2.min.css">
@stop

@section('js')
<script src="{{ asset('/') }}assets/plugins/select2/js/select2.min.js"></script>
<script>
	
</script>
@stop

@section('content')
<main class="mn-inner">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-content">
					<span class="card-title">Input fields</span><br>
					<div class="row">
						<form class="form-horizontal">
							<div class="row">
								<div class="input-field col s12">
									<input id="nama" type="text" class="form-control">
									<label for="first_name">Nama Barang</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select name="warna">
										<option value="" disabled selected>Choose your option</option>
										<option value="1">Option 1</option>
										<option value="2">Option 2</option>
										<option value="3">Option 3</option>
									</select>
									<label>Warna Barang</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s8">
									<input id="garansi" type="text" class="form-control">
									<label for="first_name">Garansi</label>
								</div>
								<div class="input-field col s4">
									<select name="garansi-jenis">
										<option value="2">Bulan</option>
										<option value="3">Tahun</option>
									</select>
									<label></label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="harga" type="text" class="form-control">
									<label for="first_name">Harga Barang</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="keterangan" type="text" class="form-control">
									<label for="first_name">Keterangan Barang</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@stop