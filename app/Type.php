<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false;
    protected $fillable = [ 
    	'nama_jenis' , 'kd_jenis' , 'keterangan'

    ];
}
