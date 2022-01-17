<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tilang extends Model
{
    protected $table = 'tilangs';
    protected $fillable =array('user_id','terdakwa','tilang','denda','lokasi','tanggal','keterangan');

    public function user(){
    	return $this->belongsTo('App\User','user_id');
	}
}
