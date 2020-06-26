<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = "tb_track";
    protected $primaryKey = 'track_id';
    protected $fillable = ['nama_track', 'album_id', 'file'];
    public function album(){
    	return $this->belongsTo('App\Album','album_id');
    }
}
