@extends('frontend.default',$config)

@section('content')

<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">

			<div class="agile-1">
				<div class="features-main">
					<div class="fea-top">
						<h3 class="w3">Kegiatan</h3>
						<p>Selamat Datang di halaman kegiatan Masjid.</p>
					</div>
					
					<div class="feature-botttom">
						@foreach($data as $d)
						<div class="col-md-6 fea-grid">
							<div class="fea-img">
								<img style="max-width: 80%" src="{{ asset($d->gambar) }}" alt="">
							</div>
							<div class="fea-text">
								<h4>{{$d->judul}} - {{$d->kategori->kategori}}</h4>
								<h4></h4>

							</div>
							<div class="clearfix"> </div>
						</div>
						@endforeach
						<div class="clearfix"> </div>
					</div>

				</div>
				
			</div>
		</div>
		<!-- technology-right -->
		@include('frontend.partials._sidebar')
	</div>
</div>
@endsection