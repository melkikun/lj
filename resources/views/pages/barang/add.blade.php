@extends('layout.template')
@section('title')
LJ | TAMBAH BARANG
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/js/plugins/sweet-alert/sweetalert.css">
@endsection
@section('js')
<script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/autonumeric/autoNumeric.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>
@endsection
@section('javascript')
<script>
	jQuery(document).ready(function($) {
		$('#harga').autoNumeric();
		$('#garansi').autoNumeric();
		jQuery.ajax({
			url: '{{ route('get.warna') }}',
			type: 'get',
			dataType: 'json',
			data: {param1: 'value1'},
			beforeSend:function(xhr){
				$('#warna').empty();
			},
			complete: function(xhr, textStatus) {
				$('.select-search').select2();
			},
			success: function(response, textStatus, xhr) {
				var option = "";
				for (var i = 0; i < response.length; i++) {
					option += "<option value='"+response[i].nm_warna+"'>"+response[i].nm_warna+"</option>";
				};
				$('#warna').append(option);
			},
			error: function(xhr, textStatus, errorThrown) {
		    //called when there is an error
		}
	});
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
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title text-center">FORM PENGISIAN BARANG BARU</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>
			{!! Form::open(['route'=>'submit.barang', "id"=>"form-submit", "onsubmit"=>"return confirm('Apa anda yakin?')"]) !!}
			<div class="panel-body">
				<div class="form-group">
					<label>NAMA BARANG</label>
					<input type="text" class="form-control" name="nama" id="nama" value="{{old('nama')}}" placeholder="~ Contoh: 'KULITAN AA' ~" onkeyup="uppercase('nama')">
					@if (count($errors) > 0)
					@foreach ($errors->all() as $value)
					<label id="basic-error" class="validation-error-label" for="basic">{{$value}}</label>
					@endforeach
					@endif
				</div>
				<div class="form-group">
					<label>WARNA BARANG</label>
					<select class="select-search" name="warna" id="warna">
					</select>
				</div>
				<div class="form-group">
					<label class="display-block text-semibold">JENIS BARANG</label>
					<div class="radio">
						<label>
							<input type="radio" name="jenis" id="satuan" value="S" checked="checked">
							SATUAN 
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="jenis" id="kubikasi" value="K">
							KUBIKASI
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="display-block text-semibold">GARANSI</label>
					<div class="input-group">
						<input class="form-control" id="garansi" type="text" name="garansi" value="{{old('garansi')}}" placeholder="Contoh: 12">
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
						<input class="form-control"  type="text" id="harga" name="harga" value="{{old('harga')}}"  placeholder="Contoh: 10000">
					</div>
				</div>
				<div class="form-group">
					<label class="display-block text-semibold">KETERANGAN</label>
					<input class="form-control" type="text" id="remark" name="remark" value="{{old('remark')}}" placeholder="Contoh : Barang Bagus" onkeyup="uppercase('remark')">
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