<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    public function pratica() {
    	return $this->belongsToMany('App\Pratica', 'id');
	}
}
