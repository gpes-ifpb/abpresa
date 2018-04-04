<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table = 'arquivo';

    public function pratica() {
    	return $this->hasOne('App\Pratica','id');
    }
}
