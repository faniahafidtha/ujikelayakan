<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;
    protected $fillable = [
 	'nama_ruang' , 'kd_ruang' , 'keterangan'
    ];
}
