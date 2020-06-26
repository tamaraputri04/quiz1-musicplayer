<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artis extends Model
{
    protected $table = "tb_artis";
    protected $primaryKey = 'artis_id';
    protected $fillable = ['nama_artis'];
}
