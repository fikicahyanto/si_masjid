<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $fillable = [
		'kategori'
	];

	public function blog(){
		return $this->hasMany('App\Blog','kategori_id');
	}
}
