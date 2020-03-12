@extends('templates.default')

@section('content')
<div class="blank-page">

	<div class="tab-pane active" id="horizontal-form">
		@foreach($data as $d)
		<form class="form-horizontal" method="Post" action="{{ url('/administrator/pengaturan/update') }}">
			{!! csrf_field() !!}
			<div class="form-group">
				<label for="nama" class="col-sm-2 control-label label-input-sm">Nama Perusahan</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="nama" placeholder="Nama Perusahaan" name="nama" value="{{$d->nama_perusahaan}}">
				</div>
			</div>

			<div class="form-group">
				<label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
				<div class="col-sm-8"><textarea name="deskripsi" id="deskripsi" class="summernote">{{$d->deskripsi}}</textarea></div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 control-label label-input-sm">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="email" placeholder="email..." name="email" value="{{$d->email}}">
				</div>
			</div>

			<div class="form-group">
				<label for="telepon" class="col-sm-2 control-label label-input-sm">Telepon</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="telepon" placeholder="telepon" name="telepon" value="{{$d->telepon}}">
				</div>
			</div>



			<div class="form-group">
				<label for="alamat" class="col-sm-2 control-label label-input-sm">Alamat</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="alamat" placeholder="alamat..." name="alamat" value="{{$d->alamat}}">
				</div>
			</div>

			<div class="form-group">
				<label for="kota" class="col-sm-2 control-label label-input-sm">Kota</label>
				<div class="col-sm-8">
					<input type="text" name="kota" class="form-control1 input-sm" id="kota" placeholder="Small Input" value="{{$d->kota}}">
				</div>
			</div>

			<div class="form-group">
				<label for="kodepos" class="col-sm-2 control-label label-input-sm">Kode Pos</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="kodepos" placeholder="kode pos..." name="kodepos" value="{{$d->kode_pos}}">
				</div>
			</div>

			
			<div class="form-group">
				<label for="facebook" class="col-sm-2 control-label label-input-sm">Facebook</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="facebook" placeholder="akun facebook..." name="facebook" value="{{$d->facebook}}">
				</div>
			</div>

			<div class="form-group">
				<label for="instagram" class="col-sm-2 control-label label-input-sm">Instagram</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1 input-sm" id="instagram" placeholder="akun instagram..." name="instagram" value="{{$d->instagram}}">
				</div>
			</div>
			<center>
				<input type="submit"class="btn btn-info" value="Simpan Profil"></input>
				<a href="#" class="btn btn-default">Batal</a>
			</center>
		</form>
		@endforeach
	</div>

</div>

@endsection