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

			<div class="panel-body">
				<div class="form-group">
					<label class="display-block">Nama Barang</label>
					<input type="text" class="form-control" placeholder="Contoh : A8">
				</div>
				<div class="form-group">
					<label class="display-block">Warna Barang</label>
					<select class="select-border-color border-warning">
						<optgroup label="Mountain Time Zone">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="WY">Wyoming</option>
						</optgroup>
						<optgroup label="Central Time Zone">
							<option value="AL">Alabama</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
						</optgroup>
						<optgroup label="Eastern Time Zone">
							<option value="CT">Connecticut</option>
							<option value="FL">Florida</option>
							<option value="MA">Massachusetts</option>
							<option value="WV">West Virginia</option>
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<label class="display-block">Warna Barang</label>
					<label class="radio-inline">
						<input type="radio" class="styled" name="gender" checked="checked">
						Kubikasi
					</label>

					<label class="radio-inline">
						<input type="radio" class="styled" name="gender">
						Satuan
					</label>
				</div>
				<div class="form-group">
					<label>GARANSI</label>
					<div class="input-group">
						<input data-v-min="0" data-v-max="9999" class="autonumeric form-control" id="inv_wranty" value="0" type="text">
						<span class="input-group-btn">
							<select class="form-control" style="width: 90px;" id="inv_wranty_typ">
								<option value="bulan">Bulan</option>
								<option value="tahun">Tahun</option>                                            
							</select>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label class="display-block">Harga Barang</label>
					<input type="text" class="form-control" placeholder="Contoh : 120000">
				</div>
				<div class="form-group">
					<label class="display-block">Keterangan</label>
					<input type="text" class="form-control" placeholder="Contoh : barang bagus">
				</div>
				<div class="row">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-outline col-sm-12">SUBMIT</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection