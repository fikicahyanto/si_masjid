<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $fillable = [
		'judul','gambar','kategori_id'
	];

	public function kategori(){
		return $this->belongsTo('App\Kategori','kategori_id');
	}
}
