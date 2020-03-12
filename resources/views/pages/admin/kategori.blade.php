@extends('templates.default')

@section('content')
<div class="blank-page">

	@if ($jumlah_kategori>0)
	<table class="table">
		<thead>
			<tr>
				<td>No.</td>
				<td>Kategori</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			
			<?php foreach($kategori_list as $kategori): ?> 
				<tr>
					<td>{{ $kategori->id }}</td>
					<td>{{ $kategori->kategori }}</td>
					<td>
						<a href="{{url('/administrator/kategori/edit/')}}/{{$kategori->id}}" class="btn btn-warning btn-sm">Edit</a>
						<a href="{{url('/administrator/kategori/hapus/')}}/{{$kategori->id}}" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
		<tfoot><a href="{{ url('/administrator/kategori/tambah') }}" class="btn btn-info">Tambah Post</a></tfoot>
	</table>
	@else
	@endif
	

	<div class="paging">
		{{$kategori_list->links()}}
	</div>  
	<p>Total Data : {{$jumlah_kategori}}</p>
</div>

@endsection