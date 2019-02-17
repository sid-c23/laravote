<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	public function songs() {
		return $this->belongsToMany('App\Song');
	}
}
