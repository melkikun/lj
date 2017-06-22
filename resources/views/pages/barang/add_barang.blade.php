@extends('layout.template')
@section('main-js')
<script type="text/javascript" src="{{ asset('/') }}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/forms/selects/select2.min.js"></script>
@endsection
@section('custom-js')
<script type="text/javascript" src="{{ asset('/') }}assets/js/pages/form_select2.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/pages/form_layouts.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/autonumeric/autoNumeric.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/notifications/sweet_alert.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/pages/components_modals.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/ui/ripple.min.js"></script>
<script>
	jQuery(document).ready(function($) {
		$('#garansi').autoNumeric();
		$('#harga').autoNumeric();
		@if (Session::has('save'))
		@if (Session::get('save') == 1)
		swal("Berhasil Insert", "", "success");
		@else
		swal("Gagal Insert", "", "error");
		@endif
		@endif
	});
</script>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
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
			{!! Form::open(["route"=>"submit.barang", "onsubmit"=>"return confirm('apa anda yakin submit')"]) !!}
			<div class="panel-body">
				<div class="form-group">
					<label class="display-block">Nama Barang</label>
					<input type="text" class="form-control" placeholder="Contoh : A8" name="nama" value="{{old('nama')}}">
					@if ($errors->has('nama'))
					@foreach ($errors->get('nama') as $e)
					<span class="help-block" style="color: #d84315">{{$e}}</span>
					@endforeach
					@endif
				</div>
				<div class="form-group">
					<label class="display-block">Warna Barang</label>
					<select class="select-border-color border-warning" name="warna">
						@foreach ($warna as $w)
						<option value="{{$w->nm_warna}}">{{$w->nm_warna}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="display-block">Jenis Barang</label>
					<label class="radio-inline">
						<input type="radio" class="styled" name="jenis" checked="checked" value="K">
						Kubikasi
					</label>

					<label class="radio-inline">
						<input type="radio" class="styled" name="jenis" value="S">
						Satuan
					</label>
				</div>
				<div class="form-group">
					<label>GARANSI</label>
					<div class="input-group">
						<input data-v-min="0" data-v-max="9999" class="autonumeric form-control" id="garansi" type="text" value="{{old('garansi')}}" name="garansi">
						<span class="input-group-btn">
							<select class="form-control" style="width: 90px;" id="type_garansi" name="type_garansi">
								<option value="bulan">Bulan</option>
								<option value="tahun">Tahun</option>                                            
							</select>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label class="display-block">Harga Barang</label>
					<input type="text" class="form-control" placeholder="Contoh : 120000" name="harga" value="{{old('harga')}}">
				</div>
				<div class="form-group">
					<label class="display-block">Keterangan</label>
					<input type="text" class="form-control" placeholder="Contoh : barang bagus" name="remark" value="{{old('remark')}}">
				</div>
				<div class="row">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-outline col-sm-12">SUBMIT</button>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection