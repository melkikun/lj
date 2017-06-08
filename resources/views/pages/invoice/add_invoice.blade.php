@extends('layout.template')
@section('css')
<style type="text/css">
	.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td{
		padding: 15px 10px;
	}
</style>
@endsection
@section('main-js')
<script type="text/javascript" src="{{asset('/')}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>

<script type="text/javascript" src="{{ asset('/') }}assets/js/core/libraries/jquery_ui/widgets.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/core/libraries/jquery_ui/effects.min.js"></script>
@endsection
@section('custom-js')
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#nama').datepicker();
		$('select').select2({
			dropdownAutoWidth : true
		});
		@if (Session::has("response"))
		@if (Session::get("response") == 1)
		swal("berhasil input", "success", "success");
		@else
		swal("gagal input", "error", "error");
		@endif
		@endif
	});
</script>
@endsection
@section('content')
<div class="row">
	<div class="panel panel-flat col-sm-6" id="first-p" style="margin-right: 1%; width: 49%;">
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
			<form class="form-horizontal" action="#">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label class="display-block text-semibold">TANGGAL INVOICE</label>
							<div class="input-group" style="width: 98%;">
								<span class="input-group-addon"><i class="icon-calendar"></i></span>
								<input type="text" class="form-control datepicker" placeholder="Pick a date&hellip;">
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label class="display-block text-semibold">NOMER INVOICE</label>
							<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: A-50" type="text">
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
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 49%; padding-right: 5%">
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
						<div class="form-group" style="width: 98%;">
							<label class="display-block text-semibold">PO NO</label>
							<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group" style="width: 98%;">
							<label class="display-block text-semibold">SALESMAN</label>
							<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group" style="width: 98%;">
							<label class="display-block text-semibold">TERM OF PAYMENT</label>
							<input class="form-control" id="harga" name="harga" value="" placeholder="Contoh: 10000" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-xs-12 col-sm12 col-md-12 col-lg-12">
							<label class="display-block text-semibold">ALAMAT</label>
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
							<label class="display-block text-semibold">KOTA</label>
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
</div>
<div class="row">
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
		<div class="panel-body" style="padding: 0px; margin-bottom: 20px;">
			<table class="table datatable-basic table-bordered table-striped">
				<thead>
					<tr>
						<th class="text-center" rowspan="2"><i class="icon-plus-circle2"></i></th>
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
						<td><i class="icon-minus-circle2"></i></td>
						<td>
							<select name="warna" id="warna">
								<optgroup label="KUBIKASI">
									<option value="184">8A1</option>
									<option value="77">8B</option>
									<option value="28">AA</option>
									<option value="47">AF ORTHO</option>
									<option value="136">AHSKB</option>
									<option value="100">ANEKA AA</option>
									<option value="108">ANEKA KNITTING</option>
									<option value="116">AS</option>
									<option value="137">AS30</option>
									<option value="97">ASM</option>
									<option value="123">ASS</option>
									<option value="167">AX</option>
									<option value="166">AX</option>
									<option value="35">B1</option>
									<option value="182">BANTAL KNITTING</option>
									<option value="105">BANTAL SOFA</option>
									<option value="113">CBC</option>
									<option value="62">CD</option>
									<option value="132">CELINE</option>
									<option value="65">D 14</option>
									<option value="60">D 17</option>
									<option value="61">D 19</option>
									<option value="171">D20</option>
									<option value="76">D3S</option>
									<option value="104">D52</option>
									<option value="121">DB</option>
									<option value="192">DB+</option>
									<option value="94">DBB</option>
									<option value="124">DELUX</option>
									<option value="107">DRUM KOSONG BERSIH</option>
									<option value="106">DRUM KOSONG KOTOR</option>
									<option value="25">FIRM 1</option>
									<option value="26">FIRM 2</option>
									<option value="27">FIRM 3</option>
									<option value="112">GH</option>
									<option value="30">GOLD</option>
									<option value="122">GS</option>
									<option value="195">Guling Dakron D</option>
									<option value="33">HR</option>
									<option value="175">HRS</option>
									<option value="85">IIH</option>
									<option value="86">IIH</option>
									<option value="42">IIS</option>
									<option value="83">IISK</option>
									<option value="102">K329</option>
									<option value="160">KASUR BUSA</option>
									<option value="153">KASUR ORTOPEDIK</option>
									<option value="75">KK</option>
									<option value="118">KLJ+</option>
									<option value="149">KR24</option>
									<option value="147">KR24</option>
									<option value="150">KR24</option>
									<option value="148">KR24</option>
									<option value="168">KS</option>
									<option value="135">KSS</option>
									<option value="128">KULITAN UK.120CM</option>
									<option value="130">KULITAN UK.150CM</option>
									<option value="133">KUNING</option>
									<option value="198">LJ 1</option>
									<option value="117">LJ 10</option>
									<option value="190">LJ 12</option>
									<option value="134">LJ 15</option>
									<option value="143">LJ 16</option>
									<option value="194">LJ 18</option>
									<option value="193">LJ 18</option>
									<option value="127">LJ 19</option>
									<option value="172">LJ 2</option>
									<option value="120">LJ 20</option>
									<option value="90">LJ 23</option>
									<option value="162">LJ 24</option>
									<option value="88">LJ 25</option>
									<option value="87">LJ 26</option>
									<option value="138">LJ 30</option>
									<option value="91">LJ 4</option>
									<option value="144">LJ 48</option>
									<option value="125">LJ 49</option>
									<option value="71">LJ 5</option>
									<option value="154">LJ 50</option>
									<option value="165">LJ 56</option>
									<option value="196">LJ 8</option>
									<option value="89">LJ 9+</option>
									<option value="178">LJ PREMIER</option>
									<option value="131">LUNA</option>
									<option value="59">Lj 11</option>
									<option value="66">Lj 21</option>
									<option value="50">Lj 27</option>
									<option value="99">Lj 3</option>
									<option value="163">Lj 9</option>
									<option value="72">MEGA S</option>
									<option value="44">MS</option>
									<option value="48">ORANGE</option>
									<option value="34">ORTHO</option>
									<option value="109">P10</option>
									<option value="74">P12</option>
									<option value="101">P15</option>
									<option value="81">P20</option>
									<option value="70">PL</option>
									<option value="57">REBONDED D100</option>
									<option value="58">REBONDED D120</option>
									<option value="51">REBONDED D40</option>
									<option value="52">REBONDED D50</option>
									<option value="53">REBONDED D60</option>
									<option value="54">REBONDED D70</option>
									<option value="55">REBONDED D80</option>
									<option value="56">REBONDED D90</option>
									<option value="68">SI</option>
									<option value="20">SOFT 1</option>
									<option value="21">SOFT 2</option>
									<option value="22">SOFT 3</option>
									<option value="23">SOFT 4</option>
									<option value="24">SOFT 5</option>
									<option value="43">SP</option>
									<option value="197">SPB</option>
									<option value="32">SPECIAL</option>
									<option value="69">SS</option>
									<option value="169">STK</option>
									<option value="157">SWAN GOLD</option>
									<option value="158">SWAN GOLD</option>
									<option value="156">SWAN GOLD</option>
									<option value="173">SWAN PLATINUM</option>
									<option value="103">TD30</option>
									<option value="142">VA</option>
									<option value="170">VIOLET</option>
									<option value="119">WHITE</option>
									<option value="29">XT</option>
									<option value="31">YELLOW</option>
								</optgroup>
								<optgroup label="SATUAN">
									<option value="140">ANEKA YELLOW</option>
									<option value="46">AVALAN</option>
									<option value="63">BANTAL</option>
									<option value="80">BANTAL CINTA</option>
									<option value="145">BANTAL DAKRON</option>
									<option value="188">BANTAL DAKRON C</option>
									<option value="187">BANTAL DAKRON D</option>
									<option value="164">BANTAL SS</option>
									<option value="98">BS PLASTIK</option>
									<option value="185">Bantal Hard Latex</option>
									<option value="19">DENVER</option>
									<option value="151">EMBER / TIMBO</option>
									<option value="180">FOAM MATTRESS</option>
									<option value="11">GALAXY</option>
									<option value="216">GFGFDG</option>
									<option value="64">GULING</option>
									<option value="189">Guling Dakron C</option>
									<option value="186">Guling Hard Latex</option>
									<option value="18">KAPALAN A</option>
									<option value="40">KAPALAN AA</option>
									<option value="41">KAPALAN AA YELLOW</option>
									<option value="141">KAPALAN AB</option>
									<option value="39">KAPALAN B</option>
									<option value="111">KASUR LANTAI</option>
									<option value="67">KASUR LATEX</option>
									<option value="110">KASUR LIPAT</option>
									<option value="146">KULITAN</option>
									<option value="181">KULITAN 160CM</option>
									<option value="177">KULITAN 180CM</option>
									<option value="36">KULITAN A</option>
									<option value="38">KULITAN AA</option>
									<option value="155">KULITAN AA YELLOW</option>
									<option value="37">KULITAN B</option>
									<option value="129">KULITAN UK.140CM</option>
									<option value="176">Kulitan 180cm</option>
									<option value="191">Kulitan Uk.100cm</option>
									<option value="45">LGH</option>
									<option value="152">MIKA</option>
									<option value="73">Ongkos Glangsing</option>
									<option value="15">PREMIER 5 TAHUN</option>
									<option value="16">PREMIER AA</option>
									<option value="159">PREMIER JACQUARD</option>
									<option value="126">PREMIER QUILTING</option>
									<option value="179">PREMIER SWAN</option>
									<option value="17">PREMIER YELLOW</option>
									<option value="139">PREMIER YELLOW KNITTING Q</option>
									<option value="174">QUANTUM  YELLOW</option>
									<option value="215">TESTING</option>
									<option value="183">UANG MUKA KASUR JADI</option>
									<option value="79">URUNG</option>
									<option value="211">fsfsdf</option>
									<option value="212">fsfsdf11</option>
									<option value="213">fsfsdf111</option>
								</optgroup>
							</select>
						</td>
						<td>
							<select name="warna" id="warna">
								<option value="-">-</option>
								<option value="ABU-ABU">ABU-ABU</option>
								<option value="BIRU">BIRU</option>
								<option value="BIRU TUA">BIRU TUA</option>
								<option value="HIJAU">HIJAU</option>
								<option value="HITAM">HITAM</option>
								<option value="KREM">KREM</option>
								<option value="KULITAN A">KULITAN A</option>
								<option value="KULITAN B">KULITAN B</option>
								<option value="KUNING">KUNING</option>
								<option value="KUNING KS">KUNING KS</option>
								<option value="MERAH">MERAH</option>
								<option value="MERAH MUDA">MERAH MUDA</option>
								<option value="ORANGE">ORANGE</option>
								<option value="PUTIH">PUTIH</option>
								<option value="PUTIH TULANG">PUTIH TULANG</option>
								<option value="UNGU">UNGU</option>
								<option value="VIOLET">VIOLET</option>
							</select>
						</td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><td class="text-center"><div class="input-group">
                 <input value="1" id="trg_stat_0" onchange="hitung(&quot;0&quot;,&quot;harga&quot;)" type="checkbox">Lembaran
                 </div>
                    <input value="0" id="trg_prc_unit_0" class="form-control" style="width:100px;" onkeyup="hitung(&quot;0&quot;,&quot;harga&quot;,&quot;unit_price&quot;)" type="text"></td></td>
						<td><input type="text" class="form-control"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="panel-body">
		<button type="button" class="btn btn-primary col-sm-12">SUBMIT</button>
	</div>
</div>
@endsection