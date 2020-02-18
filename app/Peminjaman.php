<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
	public $table = "peminjamans";
    protected $fillable = [
    	'tgl_pinjam' , 'tgl_kembali' , 'status' , 'id_pegawai'
    ];
    public $timestamps = false;
}
