@extends('layout.template')
@section('title')
LJ | TAMBAH BARANG
@endsection
@section('css')
{{-- expr --}}
@endsection
@section('js')
<script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/pages/form_select2.js"></script>
<script type="text/javascript">
	
</script>
@endsection
@section('content')
<!-- Select2 selects -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Single select</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>
			{!! Form::open(['route'=>'submit.barang']) !!}
			<div class="panel-body">
				<div class="form-group">
					<label>NAMA BARANG</label>
					<input type="text" class="form-control" name="nama" id="nama" value="{{old('nama')}}">
				</div>
				<div class="form-group">
					<label>WARNA BARANG</label>
					<select class="select-search" name="warna" id="warna">
						<option value="AL">Alabama</option>
						<option value="AR">Arkansas</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
					</select>
				</div>
				<div class="form-group">
					<label class="display-block text-semibold">JENIS BARANG</label>
					<div class="radio">
						<label>
							<input type="radio" name="jenis" id="satuan" value="satuan" checked="checked">
							SATUAN 
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="jenis" id="kubikasi" value="kubikasi">
							KUBIKASI
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="display-block text-semibold">GARANSI</label>
					<div class="input-group">
						<input class="form-control" id="garansi" value="0" type="text" name="garansi" value="{{old('garansi')}}">
						<span class="input-group-btn">
							<select class="form-control" style="width: 90px;" id="type-garansi" name="type-garansi">
								<option value="bulan">Bulan</option>
								<option value="tahun">Tahun</option>                                            
							</select>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label class="display-block text-semibold">HARGA</label>
					<div class="input-group">
						<span class="input-group-addon"><b>Rp</b></span>
						<input class="form-control" placeholder="" type="text" id="harga" name="harga" value="{{old('harga')}}">
					</div>
				</div>
				<div class="form-group">
					<label class="display-block text-semibold">REMARK</label>
					<input class="form-control" placeholder="" type="text" id="remark" name="remark" value="{{old('remark')}}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-outline col-sm-12">SUBMIT</button>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<!-- /select2 selects -->
@endsection