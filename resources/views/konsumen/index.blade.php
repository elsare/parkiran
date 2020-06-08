@extends('layouts.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif
<div class="row">
	<div class="col-6">
		<h5>DATA KONSUMEN</h5>		
	</div>
	<div class="col-6">		
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			Tambah
		</button>
	</div>
	<table class="table table-hover">
		<tr>
			<th>Nama Konsumen</th>
			<th>Jenis Kendaraan</th>
			<th>No. Polisi</th> 
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>No. Hp</th>
			<th>Aksi</th>
		</tr>
		@foreach($data_konsumen as $konsumen)
		<tr>
			<td>{{$konsumen->nama_konsumen}}</td>
			<td>{{$konsumen->jenis_kendaraan}}</td>
			<td>{{$konsumen->no_polisi}}</td>
			<td>{{$konsumen->tgl_lahir}}</td>
			<td>{{$konsumen->kelamin}}</td>
			<td>{{$konsumen->no_hp}}</td>
			<td><a href="/konsumen/{{$konsumen->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				<a href="/konsumen/{{$konsumen->id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">				
				<form action="/konsumen/create" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Konsumen</label>
						<input name="nama_konsumen" type="text" class="form-control" id="exampleInputEmail1">
					</div>		
					<div class="form-group">
						<label for="exampleFormControlSelect1">Jenis Kendaraan</label>
						<select name="jenis_kendaraan" class="form-control" id="exampleFormControlSelect1">
							<option>Mobil</option>
							<option>Motor</option>
						</select>
					</div>				
					<div class="form-group">
						<label for="exampleInputEmail1">No. Polisi</label>
						<input name="no_polisi" type="text" class="form-control" id="exampleInputEmail1">
					</div>			
					<div class="form-group">
						<label for="exampleInputEmail1">Tanggal Lahir</label>
						<input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1">
					</div>			
					<div class="form-group">
						<label for="exampleFormControlSelect1">Jenis Kelamin</label>
						<select name="kelamin" class="form-control" id="exampleFormControlSelect1">
							<option>Laki-Laki</option>
							<option>Perempuan</option>	
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">No. Hp</label>
						<input name="no_hp" type="text" class="form-control" id="exampleInputEmail1">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection