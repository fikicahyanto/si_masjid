@extends('frontend.default',$config)

@section('content')

<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			@foreach($post_list as $d)
			<div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="tch-img">
					<a href="{{ url('/blog/detail') }}/{{$d->id}}"><img style="max-height: 350px;" src="{{ asset($d->gambar)}}" class="img-responsive" alt=""></a>
				</div>

				<h3><a href="{{ url('/blog/detail') }}/{{$d->id}}">{{$d->judul}}</a></h3>
				<h6>BY <a href="{{ url('/blog/detail') }}/{{$d->id}}">Admin </a>{{ Carbon\Carbon::parse($d->created_at)->format('d F y') }}.</h6>
				{!! str_limit($d->konten, $limit = 250) !!}
				<div class="bht1">
					<a href="{{ url('/blog/detail') }}/{{$d->id}}">Selengkapnya</a>
				</div>

				<div class="clearfix"></div>
			</div>

			
			@endforeach
			<div class="paging">
				{{$post_list->links()}}
			</div>
		</div>
		<!-- technology-right -->
		@include('frontend.partials._sidebar')
	</div>
</div>
@endsection