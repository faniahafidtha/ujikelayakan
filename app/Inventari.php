<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventari extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'nama' , 'kondisi' , 'keterangan' , 'jumlah' , 'id_jenis' , 'tgl_register' , 
    	'id_ruang' , 'kd_inventaris' , 'id_petugas'
    ];
}
