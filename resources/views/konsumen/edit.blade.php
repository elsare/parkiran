@extends('layouts.app')

@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif
<div class="page-content-wrapper">
  	<div class="page-content">
  	<h1 class="page-title"></h1>
    	<div class="row">
      		<div class="col-md-12">
        		<div class="portlet light form-fit bordered">
					<h2>Edit Data Konsumen</h2>
					<form action="/konsumen/{{$konsumen->id}}/update" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Konsumen</label>
							<input name="nama_konsumen" type="text" class="form-control" id="exampleInputEmail1" value="{{$konsumen->nama_konsumen}}">
						</div>		
						<div class="form-group">
							<label for="exampleFormControlSelect1">Jenis Kendaraan</label>
							<select name="jenis_kendaraan" class="form-control" id="exampleFormControlSelect1">
								<option value="Mobil">Mobil</option>
								<option value="Motor">Motor</option>
							</select>
						</div>				
						<div class="form-group">
							<label for="exampleInputEmail1">No. Polisi</label>
							<input name="no_polisi" type="text" class="form-control" id="exampleInputEmail1" value="{{$konsumen->no_polisi}}">
						</div>			
						<div class="form-group">
							<label for="exampleInputEmail1">Tanggal Lahir</label>
							<input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" value="{{$konsumen->tgl_lahir}}">
						</div>			
						<div class="form-group">
							<label for="exampleFormControlSelect1">Jenis Kelamin</label>
							<select name="kelamin" class="form-control" id="exampleFormControlSelect1">
								<option value="L" @if($konsumen->kelamin == "L") selected @endif>Laki-Laki</option>
								<option value="P" @if($konsumen->kelamin == "P") selected @endif>Perempuan</option>	
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">No. Hp</label>
							<input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" value="{{$konsumen->no_hp}}">
						</div>
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
						<button type="submit" class="btn btn-primary simpan">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
<!-- @section('footer')
<script type="text/javascript">
	$('.simpan').click(function() {
		
	})
</script>
@endsection -->