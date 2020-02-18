<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $fillable = [
    	'username' , 'password' , 'nama_petugas' , 'id_level'
    ];
    public $timestamps = false;
}
