@extends('frontend.default',$config)

@section('content')

<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="w3agile-1">
				<div class="welcome">
					<div class="welcome-top heading">
						<h2 class="w3">PROFIL MASJID</h2>
						<div class="welcome-bottom">
							
							
							@foreach($config as $d)
							<img style="max-width: 500px" src="{{ asset($d->logo) }} " class="img-responsive" alt="">

							<div class="clearfix"></div>
							<table class="table table-striped">
								<tr>
									<td>Nama Masjid</td>
									<td>{{$d->nama_perusahaan}}</td>
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td>{!!$d->deskripsi!!}</td>
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
								</tr>
							</table>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- technology-right -->
		@include('frontend.partials._sidebar',$post_list)
	</div>
</div>
@endsection