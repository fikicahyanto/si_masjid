@extends('templates.default')

@section('content')
<div class="blank-page">
	@foreach($data as $d)
	<table class="table table-striped">
		<thead>
			<center>
				<tr style="column-span:2;"> Profil Masjid</tr>
			</center>
		</thead>
		<tr>
			<td>Nama Masjid</td>
			<td>{{$d->nama_perusahaan}}</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>{{$d->deskripsi}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$d->email}}</td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>{{$d->telepon}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>{{$d->alamat}}</td>
		</tr>
		<tr>
			<td>Kota</td>
			<td>{{$d->kota}}</td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td>{{$d->kode_pos}}</td>
		</tr>
		<tr>
			<td>Logo</td>
			<td><img style="max-width: 150px" src="{{ asset($d->logo) }}"></td>
		</tr>
		<tr>
			<td>Facebook</td>
			<td>{{$d->facebook}}</td>
		</tr>
		<tr>
			<td>Instagram</td>
			<td>{{$d->instagram}}</td>
		</tr>
	</table>
	@endforeach
	<a href="{{ url('/administrator/pengaturan/edit') }}" class="btn btn-info">Ubah Profil</a>
</div>

@endsection