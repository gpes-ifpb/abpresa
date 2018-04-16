<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pratica extends Model
{
    protected $table = 'pratica';

    public function pratica() {
    	return $this->hasMany('App\Arquivo','id');
    }

    public function tag() {
    	return $this->belongsToMany('App\Tag', 'id');
	}

	public function categoria() {
    	return $this->belongsToMany('App\Categoria', 'id');
	}
}
