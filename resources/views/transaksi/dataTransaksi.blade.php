@extends('layouts.app')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif
<div class="row">
	<div class="col-6">
		<h5>Daftar Transaksi</h5>		
	</div>
	<table class="table table-hover">
		<tr>
			<th>Jenis Kendaraan</th>
			<th>No. Polisi</th>
			<th>Masuk</th>
			<th>Keluar</th>
			<th>Biaya</th>
		</tr>
		@foreach($daftar_transaksi as $transaksi)
		<tr>
			<td>{{$transaksi->jenis_kendaraan}}</td>
			<td>{{$transaksi->no_polisi}}</td>
			<td>{{$transaksi->masuk}}</td>
			<td>{{$transaksi->keluar}}</td>
			<td>{{$transaksi->biaya}}</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection