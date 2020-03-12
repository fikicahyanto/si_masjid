@extends('frontend.default',$config)

@section('content')

<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			@foreach($data as $d)
			<div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="single">
					<img src="{{ asset($d->gambar) }}" style="max-height: 350px;" class="img-responsive" alt="">
					<div class="b-bottom"> 
						<h5 class="top">{{$d->judul}}</h5>
						<p class="sub">{!! $d->konten !!}</p>
						<p>{{ Carbon\Carbon::parse($d->created_at)->format('d F y') }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{$jumlah_komen}} </a></p>

					</div>
				</div>

				<div class="response">
					<h4>Komentar</h4>
					@if ($jumlah_komen == 0)
					<p>Komentar tidak ditemukan di Post ini</p>
					@endif
					@foreach($komen as $k)
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="{{ asset('./frontend/images/people.png') }} " class="img-responsive" alt="">
							</a>
						</div>
						<div class="media-body response-text-right">

							<p>{{$k->pesan}}</p>
							<ul>

								<li>{{$k->nama}} , </li>
								<li>{{ Carbon\Carbon::parse($d->created_at)->format('d F y , g:i a') }}</li>
								
								<li><a href="#komen">Reply</a></li>
							</ul>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					@endforeach

				</div>	
				<div id="komen" class="coment-form">
					<h4>Silahkan Berikan Komentar</h4>
					<form action="{{ url('/blog/komentar/save') }}" method="post">
						{!! csrf_field() !!}
						<input type="hidden" value="{{$d->id}}" name="blog_id">
						<input type="text" value="Name " name="nama" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<textarea name="pesan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Masukan komentar anda...';}" required="">Masukan komentar anda...</textarea>
						<input type="submit" value="Masukan Komentar">
					</form>
				</div>	
				<div class="clearfix"></div>
				


			</div>

			
			@endforeach
			
		</div>
		<!-- technology-right -->
		@include('frontend.partials._sidebar', $post_list)
	</div>
</div>
@endsection