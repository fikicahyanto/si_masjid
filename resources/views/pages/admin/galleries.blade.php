@extends('templates.default')

@section('content')

<div class="blank-page">

	<a class="btn btn-info" href="{{url('/administrator/gallery/tambah')}}">Tambah Gambar</a>

	<div class="gallery">
		@foreach($data as $d)
		<div class="col-md">
			<div class="gallery-img">
				<a href="{{ asset($d->gambar)}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
					<img class="img-responsive " src="{{ asset($d->gambar)}}" alt="" />   
					<span class="zoom-icon"> </span> </a>
				</a>
			</div>	
			<div class="text-gallery">
				<h6 align="center">{{$d->judul}}</h6>
				<h6 align="center">{{$d->kategori->kategori}}</h6>
			</div>
			<center>
				<a href="{{url('/administrator/gallery/hapus')}}/{{$d->id}}" class="btn btn-danger"> Hapus</a>
				<a href="{{url('/administrator/gallery/edit')}}/{{$d->id}}" class="btn btn-warning"> Edit</a>
			</center>
		</div>
		@endforeach
		

		<div class="clearfix"> </div>
	</div>
</div>

@endsection
