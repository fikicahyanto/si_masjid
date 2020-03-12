@foreach($config as $c)
<div class="header-bottom">
	<div class="container">
		<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			
			<h1><a href="index.html">{{$c->nama_perusahaan}}</a></h1>
			<p><label class="of"></label>{{$c->alamat}}<label class="on"></label></p>

		</div>
	</div>
</div>

<div class="banner">
	<div class="container"> 
		<h2>{{$c->nama_perusahaan}}</h2>
		<p>
			{!! $c->deskripsi !!}
		</p>
		<a href="{{ url('/about') }}">Profil Lengkap</a>
	</div>
</div>
@endforeach

