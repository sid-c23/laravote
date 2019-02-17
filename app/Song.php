<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
	public function games() {
		return $this->belongsToMany('App\Game');
	}
}
