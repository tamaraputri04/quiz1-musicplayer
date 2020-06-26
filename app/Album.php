<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";
    protected $primaryKey = 'album_id';
    protected $fillable = ['nama_album','artis_id'];
    public function artis(){
    	return $this->belongsTo('App\Artis','artis_id');
    }
}
