@extends('templates.default')

@section('content')
<div class="blank-page">
	<h3 align="center">Tambah Kategori Baru</h3>
	<br/>
	<div class="tab-pane active" id="horizontal-form">
		
		@foreach($data as $d)
		<form class="form-horizontal" method="Post" action="{{ url('/administrator/kategori/update') }}/{{$d->id}}">

			{!! csrf_field() !!}
			<div class="form-group">
				<label for="kategori" class="col-sm-2 control-label label-input-sm">Kateogeri</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="judul" placeholder="Kategori..." name="kategori" value="{{$d->kategori}}">
				</div>
			</div>




			<center>
				<input type="submit" class="btn btn-info" value="Simpan Kategori">
				<a href="{{ url('/administrator/kategori') }}" class="btn btn-default">Batal</a>
			</center>
		</form>
		@endforeach
	</div>
</div>

@endsection