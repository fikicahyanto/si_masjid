<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
	protected $fillable = ['nama','email' , 'pesan' , 'blog_id'];
}
