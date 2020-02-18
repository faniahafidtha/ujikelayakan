<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'nama','nip','alamat'
    ];
}
