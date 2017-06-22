@extends('layout.template')
@section('main-js')
<script type="text/javascript" src="{{ asset('/') }}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/forms/selects/select2.min.js"></script>
@endsection
@section('custom-js')
<script type="text/javascript" src="{{ asset('/') }}assets/js/pages/form_select2.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/pages/form_layouts.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/ui/ripple.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/autonumeric/autoNumeric.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#garansi').autoNumeric();
		$('#harga').autoNumeric();
	});
	@if (Session::has('save'))
	@if (Session::get('save') == 1)
	alert("Berhasil Insert");
	@else
	alert("Gagal Insert");
	@endif
	@endif

	function cekUser () {
		var password = $('#password').val();
		var password2 = $('#password2').val();
		if(password !== password2){
			alert("pasword tidak cocok");
			return false;
		}else{
			var cf = confirm("Apa Anda Yakin Submit?");
			if (cf == true) {
				return true;
			} else{
				return false;
			};
		}
	}
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
			{!! Form::open(["route"=>"submit.user", "onsubmit"=>"return cekUser();"]) !!}
			<div class="panel-body">
				<div class="form-group">
					<label class="display-block">Nama User</label>
					<input type="text" class="form-control" placeholder="Contoh : andi" name="nama" value="{{old('nama')}}">
					@if ($errors->has('nama'))
					@foreach ($errors->get('nama') as $e)
					<span class="help-block" style="color: #d84315">{{$e}}</span>
					@endforeach
					@endif
				</div>
				<div class="form-group">
					<label class="display-block">Password</label>
					<input type="password" class="form-control" name="password" value="{{old('nama')}}" id="password">
					@if ($errors->has('password'))
					@foreach ($errors->get('password') as $e)
					<span class="help-block" style="color: #d84315">{{$e}}</span>
					@endforeach
					@endif
				</div>
				<div class="form-group">
					<label class="display-block">Re-Type Password</label>
					<input type="password" class="form-control" name="password2" value="{{old('nama')}}" id="password2">
					@if ($errors->has('password2'))
					@foreach ($errors->get('password2') as $e)
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