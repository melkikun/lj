@extends('layout.template')
@section('title')
LJ | TAMBAH CUSTOMER
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/js/plugins/sweet-alert/sweetalert.css">
@endsection
@section('main-js')

<script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/autonumeric/autoNumeric.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>
@endsection
@section('custom-js')
<script type="text/javascript">
	@if (Session::has('insert'))
	@if (Session::get('insert') == 1)
	alert("berhasil input");
	@else
	alert("gagal input");
	@endif
	@endif
</script>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title text-center">FORM PENGISIAN CUSTOMER BARU</h5>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						<li><a data-action="close"></a></li>
					</ul>
				</div>
			</div>
			{!! Form::open(['route'=>'submit.customer', "id"=>"form-submit", "onsubmit"=>"return confirm('Apa anda yakin?')"]) !!}
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-sm-12">
						<label class="display-block text-semibold">NAMA CUSTOMER</label>
						<input class="form-control"  type="text" id="nama" name="nama" value="{{old('nama')}}"  placeholder="Contoh: Jl. Mustafa 200">
						@if (count($errors->get('nama')) > 0)
						@foreach ($errors->get('nama') as $value)
						<label id="basic-error" class="validation-error-label" for="basic">{{$value}}</label>
						@endforeach
						@endif
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label class="display-block text-semibold">ALAMAT 1</label>
						
						<input class="form-control"  type="text" id="alamat1" name="alamat1" value="{{old('alamat1')}}"  placeholder="Contoh: Jl. Mustafa 200">
						@if (count($errors->get('alamat1')) > 0)
						@foreach ($errors->get('alamat1') as $value)
						<label id="basic-error" class="validation-error-label" for="basic">{{$value}}</label>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-4">
						<label class="display-block text-semibold">ALAMAT 2</label>
						<input class="form-control"  type="text" id="alamat2" name="alamat2" value="{{old('alamat2')}}"  placeholder="Contoh: Jl. Mustafa 200">
					</div>
					<div class="form-group col-sm-4">
						<label class="display-block text-semibold">ALAMAT 3</label>
						<input class="form-control"  type="text" id="alamat3" name="alamat3" value="{{old('alamat3')}}"  placeholder="Contoh: Jl. Mustafa 200">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">KOTA / KABUPATEN</label>
						<input class="form-control"  type="text" id="kota" name="kota" value="{{old('kota')}}"  placeholder="Contoh: GRESIK">
						@if (count($errors->get('kota')) > 0)
						@foreach ($errors->get('kota') as $value)
						<label id="basic-error" class="validation-error-label" for="basic">{{$value}}</label>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">PROVINSI</label>
						<input class="form-control"  type="text" id="provinsi" name="provinsi" value="{{old('provinsi')}}"  placeholder="Contoh: JAWA TIMUR">
						@if (count($errors->get('provinsi')) > 0)
						@foreach ($errors->get('provinsi') as $value)
						<label id="basic-error" class="validation-error-label" for="basic">{{$value}}</label>
						@endforeach
						@endif
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label class="display-block text-semibold">NO TELEPON 1</label>
						<input class="form-control"  type="text" id="telepon1" name="telepon1" value="{{old('telepon1')}}"  placeholder="Contoh: 031456789">
					</div>
					<div class="form-group col-sm-4">
						<label class="display-block text-semibold">NO TELEPON 2</label>
						<input class="form-control"  type="text" id="telepon2" name="telepon2" value="{{old('telepon2')}}"  placeholder="Contoh: 031456789">
					</div>
					<div class="form-group col-sm-4">
						<label class="display-block text-semibold">NO TELEPON 3</label>
						<input class="form-control"  type="text" id="telepon3" name="telepon3" value="{{old('telepon3')}}"  placeholder="Contoh: 031456789">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">NO HP 1</label>
						<input class="form-control"  type="text" id="hp1" name="hp1" value="{{old('hp1')}}"  placeholder="Contoh: 0856321987">
					</div>
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">NO HP 2</label>
						<input class="form-control"  type="text" id="hp2" name="hp2" value="{{old('hp2')}}"  placeholder="Contoh: 0856321987">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">CONTACT PERSON 1</label>
						<input class="form-control"  type="text" id="cp1" name="cp1" value="{{old('cp1')}}"  placeholder="Contoh: mike">
					</div>
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">CONTACT PERSON 2</label>
						<input class="form-control"  type="text" id="cp2" name="cp2" value="{{old('cp2')}}"  placeholder="Contoh: mike">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">FAKSIMILE</label>
						<input class="form-control"  type="text" id="fax" name="fax" value="{{old('fax')}}"  placeholder="Contoh: 031 245689">
					</div>
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">EMAIL</label>
						<input class="form-control"  type="text" id="email" name="email" value="{{old('email')}}"  placeholder="Contoh: lj@gmail.com">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">TERM OF PAY</label>
						<input class="form-control"  type="text" id="top" name="top" value="{{old('top')}}"  placeholder="Contoh: 10">
					</div>
					<div class="form-group col-sm-6">
						<label class="display-block text-semibold">INFORMASI TAMBAHAN</label>
						<input class="form-control"  type="text" id="remark" name="remark" value="{{old('remark')}}"  placeholder="Contoh: Toko Terbaik">
					</div>
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