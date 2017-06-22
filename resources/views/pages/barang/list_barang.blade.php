@extends('layout.template')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title')
LJ | LIST BARANG
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/js/plugins/sweet-alert/sweetalert.css">
@endsection
@section('main-js')
<script type="text/javascript" src="{{asset('/')}}assets/js/plugins/sweet-alert/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/plugins/ui/ripple.min.js"></script>
@endsection
@section('custom-js')
<script>
	jQuery(document).ready(function($) {
		$.extend( $.fn.dataTable.defaults, {
			autoWidth: false,
			columnDefs: [{ 
				orderable: false,
				width: '100px',
				targets: [ 5 ]
			}],
			dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
			language: {
				search: '<span>Filter:</span> _INPUT_',
				lengthMenu: '<span>Show:</span> _MENU_',
				paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
			},
			drawCallback: function () {
				$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
			},
			preDrawCallback: function() {
				$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
			}
		});
		$('.datatable-basic').DataTable({
			"paging":false,
			"columnDefs": [
			{ "visible": false, "targets": 0 }
			],
			"order":[[0, "asc"], ["1", "asc"]],
			"drawCallback": function ( settings ) {
				var api = this.api();
				var rows = api.rows( {page:'current'} ).nodes();
				var last=null;

				api.column(0, {page:'current'} ).data().each( function ( group, i ) {
					if ( last !== group ) {
						$(rows).eq( i ).before(
							'<tr class="group"><td colspan="6">'+group+'</td></tr>'
							);

						last = group;
					}
				} );
			}
		});
		@if (Session::has("delete"))
		@if (Session::get("delete") == 1)
		swal("berhasil delete", "", "success");
		@else
		swal("gagal delete", "", "error");
		@endif
		@endif
	});
	function editInv (param) {
		jQuery.ajax({
			url: '{{ route('barang.getBarang') }}',
			type: 'GET',
			dataType: 'json',
			data: {id: param},
			beforeSend: function (xhr) {
				/* body... */
			},
			complete: function(xhr, textStatus) {
				$('#myModal').modal('show');
			},
			success: function(response, textStatus, xhr) {
				$('input[name=nama]').val(response.inv_name);
				$('input[name=warna]').val(response.inv_color);
				$('input[name=garansi]').val(response.inv_wrty_dur);
				$('input[name=harga]').val(response.inv_prc);
				$('input[name=remark]').val(response.inv_rem);
				$('select[name=type_garansi]').val(response.inv_wrty_typ);
				if(response.inv_count_sys == "S"){
					$('#s').prop("checked", true);
				}else{
					$('#k').prop("checked", true);
				}
				$('#id').val(response.inv_id);
			},
			error: function(xhr, textStatus, errorThrown) {
		    //called when there is an error
		}
	});
		
	}

	function submitData () {
		var id = $('#id').val();
		var nama = $('input[name=nama]').val();
		var warna = $('input[name=warna]').val();
		var garansi = $('input[name=garansi]').val();
		var harga = $('input[name=harga]').val();
		var remark = $('input[name=remark]').val();
		var type_garansi = $('select[name=type_garansi]').val();
		var jenis = $('input[name=jenis]:checked').val();

		var request = {
			id:id, 
			nama:nama,
			warna:warna,
			garansi:garansi,
			harga:harga,
			remark:remark,
			type_garansi:type_garansi,
			jenis:jenis
		};
		if(nama != ""){
			var cf = confirm("Apa anda yakin melakukan edit pada inventory ini?");
			if(cf == true){
				jQuery.ajax({
					url: '{{ route('barang.patchBarang') }}',
					type: 'patch',
					dataType: 'json',
					data: request,
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					complete: function(xhr, textStatus) {
			    //called when complete
			},
			success: function(response, textStatus, xhr) {
				if(response == true){
					swal("berhasil update barang", "", "success");
					window.location.reload();
				}else{
					swal("gagal update barang", "", "error");
				}
			},
			error: function(xhr, textStatus, errorThrown) {
			    //called when there is an error
			}
		});

			}
		}else{
			swal("Tolong isikan nama barang", "", "error");
		}

		
	}
</script>
@endsection
@section('content')
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title"><strong>Daftar Master Inventori PT. Lautan Jati</strong></h5>
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
	</div>
	<table class="table datatable-basic table-bordered table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th class="text-center">Satuan</th>
				<th class="text-center">Nama Barang</th>
				<th class="text-center">Warna Barang</th>
				<th class="text-center">Harga Barang</th>
				<th class="text-center">Lama Garansi</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Edit / Hapus</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($barang as $key => $value)
			<tr>
				<td class="text-center">
					@if ($value['inv_count_sys'] == "K")
					KUBIKASI
					@else
					SATUAN
					@endif
				</td>
				<td class="text-left">
					{{$value['inv_name']}}
				</td>
				<td class="text-center">
					{{$value['inv_color']}}
				</td>
				<td class="text-center">
					Rp {{number_format($value['inv_prc'],2)}}
				</td>
				<td class="text-center">
					@if ($value['inv_wrty_dur'] == "")
					-
					@else
					{{$value['inv_wrty_dur']}} {{$value['inv_wrty_typ']}}
					@endif
				</td>
				<td class="text-left">
					@if ($value['inv_rem'] == "")
					-
					@else
					{{$value['inv_rem']}}
					@endif
				</td>
				<td class="text-center">
					<div class="input-group col-sm-12" style="display: inline-flex;">
						{!! Form::open(["method"=>"delete",'route'=>['delete.barang', $value['inv_id']], "id"=>"form-delete-barang", "onsubmit"=>"return confirm('Apa anda yakin delete?')"]) !!}
						<button class="btn btn-info btn-xs" type="submit"><i class="icon-trash"></i></button>
						{!! Form::close() !!}
						<button class="btn btn-warning btn-xs" type="button" onclick=editInv("{{$value['inv_id']}}")><i class="icon-folder5"></i></button>
					</div><!-- /input-group -->
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Form Revisi Inventory Lautan Jati</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group">
						<label class="display-block">Nama Barang</label>
						<input type="text" class="form-control" placeholder="Contoh : A8" name="nama" value="{{old('nama')}}">
					</div>
					<div class="form-group">
						<label class="display-block">Warna Barang</label>
						<input type="text" class="form-control" placeholder="Contoh : A8" name="warna" value="{{old('nama')}}">
					</div>
					<div class="form-group">
						<label class="display-block">Jenis Barang</label>
						<label class="radio-inline">
							<input type="radio" class="styled" name="jenis" value="K" id="k">
							Kubikasi
						</label>

						<label class="radio-inline">
							<input type="radio" class="styled" name="jenis" value="S" id="s">
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
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="id" value="">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="submitData()">Save changes</button>
			</div>
		</div>
	</div>
</div>
@endsection