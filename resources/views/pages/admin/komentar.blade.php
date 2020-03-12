@extends('templates.default')

@section('content')
<div class="blank-page">

	@if (empty($komentar_list))
	
	<table class="table">
		<thead>
			<tr>
				<td>No.</td>
				<td>ID Post</td>
				<td>Nama</td>
				<td>Email</td>
				<td>Pesan</td>
				<td>Status</td>
				<td colspan="3">Action</td>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			@foreach($data as $d)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$d->blog_id}}</td>
				<td>{{$d->nama}}</td>
				<td>{{$d->email}}</td>
				<td>{{$d->pesan}}</td>
				<td> @if ($d->status == 0)
					{{-- expr --}}
					<label class="label label-success">Tampil</label>
					@endif
					@if ($d->status == 1)
					{{-- expr --}}
					<label class="label label-danger">blocked</label>
					@endif
				</td>
				<td >
					@if ($d->status == 0)
					{{-- expr --}}
					<a href="{{url('/komentar/block/')}}/{{$d->id}}" class="btn btn-default">Block</a>
					@endif
					@if ($d->status == 1)
					{{-- expr --}}
					<a href="{{url('/komentar/block/')}}/{{$d->id}}" class="btn btn-default">Tampilkan</a>
					@endif
				</td>
			</tr>
			@endforeach

		</tbody>
		<tfoot></tfoot>
	</table>
	@else
	<p>Tidak ada data siswa.</p>
	@endif


	<div class="paging">
		{{$data->links()}}
	</div>  
	<p>Total Data : {{$jumlah_komen}}</p>
</div>

@endsection