<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

	protected $fillable = [
		'judul', 'konten','gambar','kategori_id'
	];

	public function kategori(){
		return $this->belongsTo('App\Kategori','kategori_id');
	}
}
