<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    public function categoria() {
    	return $this->belongsToMany('App\Pratica', 'id');
	}
}
