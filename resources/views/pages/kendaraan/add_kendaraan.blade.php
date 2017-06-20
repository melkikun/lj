@extends('layout.template')
@section('main-js')
<script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/autonumeric/autoNumeric.min.js"></script>
@endsection
@section('css')
@endsection
@section('custom-js')
<script type="text/javascript">

	@if (Session::has('save'))
	@if (Session::get('save')==1)
	alert("berhasil input");
	@else
	alert("gagal input");
	@endif
	@endif
	jQuery(document).ready(function($) {
		$('#kapasitas').autoNumeric();
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
			{!! Form::open(['route'=>"submit.kendaraan", "onsubmit"=>"return confirm('Apa Anda yakin Submit?')"]) !!}
			<div class="panel-body">
				<div class="form-group">
					<label class="display-block">Jenis Mobil</label>
					<input type="text" class="form-control" placeholder="Contoh : AVANSA" name="jenis" value="{{old('jenis')}}">
					@if ($errors->has('jenis'))
					@foreach ($errors->get('jenis') as $e)
					<span class="help-block" style="color: #d84315">{{$e}}</span>
					@endforeach
					@endif
				</div>
				<div class="form-group">
					<label class="display-block">Plat Nomor</label>
					<input type="text" class="form-control" placeholder="Contoh : W 45632 LJ" name="plat" value="{{old('plat')}}">
					@if ($errors->has('plat'))
					@foreach ($errors->get('plat') as $e)
					<span class="help-block" style="color: #d84315">{{$e}}</span>
					@endforeach
					@endif
				</div>
				<div class="form-group">
					<label class="display-block">Kapasitas(m<sup>3</sup>)</label>
					<input type="text" class="form-control" placeholder="Contoh : 8" name="kapasitas" value="{{old('kapasitas')}}" id="kapasitas">
				</div>
				<div class="form-group">
					<label class="display-block">Sopir</label>
					<input type="text" class="form-control" placeholder="Contoh : AGUS" name="sopir" value="{{old('sopir')}}">
					@if ($errors->has('sopir'))
					@foreach ($errors->get('sopir') as $e)
					<span class="help-block" style="color: #d84315">{{$e}}</span>
					@endforeach
					@endif
				</div>
				<div class="form-group">
					<label class="display-block">Kernet</label>
					<input type="text" class="form-control" placeholder="Contoh : AMDI" name="kernet" value="{{old('kernet')}}">
					@if ($errors->has('kernet'))
					@foreach ($errors->get('kernet') as $e)
					<span class="help-block" style="color: #d84315">{{$e}}</span>
					@endforeach
					@endif
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
