@extends('templates.default')

@section('content')
<div class="blank-page">
	<h3 align="center">Tambah Post Baru</h3>
	<br/>
	<div class="tab-pane active" id="horizontal-form">
		
		@foreach($data as $d)
		<form class="form-horizontal" method="POST" action="{{ url('/administrator/post/update') }}/{{$d->id}}" enctype="multipart/form-data">
			{!! csrf_field() !!}
			
			<div class="form-group">
				<label for="nama" class="col-sm-2 control-label label-input-sm">Judul</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="judul" placeholder="Judul..." name="judul" value="{{$d->judul}}">
				</div>
			</div>	

			<div class="form-group">
				<label for="konten" class="col-sm-2 control-label">Isi Konten</label>
				<div class="col-sm-8">
					<textarea name="konten" id="konten" class="summernote">{{$d->konten}}</textarea>
				</div>
			</div>


			<div class="form-group">


				<label for="gambar" class="col-sm-2 control-label label-input-sm">Gambar Sebelumnya</label>
				<div class="col-sm-8">
					<img width="100px" height="100px" src="{{ asset($d->gambar) }}">
					<br>
					<p>*Kosongkan field gambar jika tidak ingin diganti</p>
				</div>

			</div>

			<div class="form-group">


				<label for="gambar" class="col-sm-2 control-label label-input-sm">Gambar</label>
				<div class="col-sm-8">
					<input type="file" class="form-control1 input-sm" id="gambar" placeholder="gambar..." name="gambar">
				</div>
			</div>

			<div class="form-group">
				<label for="kategori" class="col-sm-2 control-label">Kategori</label>
				<div class="col-sm-8"><select name="kategori_id" id="kategori_id" class="form-control1">

					@if($jumlah_kategori>0)
					<option   value="{{$d->kategori->id}}" selected="selected">{{$d->kategori->kategori}}</option>
					<?php foreach($list_kategori as $list): ?>
						<option value="{{$list->id}}">{{$list->kategori}}</option>
					<?php endforeach?>
					@else
					<option value='' disabled="disabled" selected="selected">Tidak Ada Pilihan Kategori</option>
					@endif


				</select></div>

			</div>
			<center>
				<input   type="submit" value="Simpan Post" class="btn btn-info"></input>
				<a href="#" class="btn btn-default">Batal</a>
			</center>
		</form>
		@endforeach
	</div>

</div>

@endsection