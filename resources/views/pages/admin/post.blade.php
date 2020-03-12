@extends('templates.default')

@section('content')
<div class="blank-page">

	@if (!empty($post_list))
	<table class="table">
		<thead>
			<tr>
				<td>No.</td>
				<td>Judul</td>
				<td>Konten</td>
				<td>Gambar</td>
				<td>Kategori</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			
			<?php foreach($post_list as $post): ?> 
				<tr>
					<td>1.</td>
					<td>{{ $post->judul }}</td>
					<td>{!! str_limit($post->konten, $limit = 250) !!}</td>
					<td><img width="50px" height="50px" src="{{asset($post->gambar) }}"></td>
					<td><p>{{ $post->kategori->kategori }}</p></td>
					{{-- <td><p>{{ $post->kategori_id }}</p></td> --}}
					<td>
						<a href="{{url('/administrator/post/edit/')}}/{{$post->id}}" class="btn btn-warning btn-sm">Edit</a>
						<a href="{{url('/administrator/post/hapus/')}}/{{$post->id}}" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
		<tfoot><a href="{{ url('/administrator/post/tambah') }}" class="btn btn-info">Tambah Post</a></tfoot>
	</table>
	@else
	<p>Tidak ada da</p>
	@endif
	

	<div class="paging">
		{{$post_list->links()}}
	</div>  
	<p>Total Data : {{$jumlah_post}}</p>
</div>

@endsection