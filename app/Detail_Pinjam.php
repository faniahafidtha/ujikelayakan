<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Pinjam extends Model
{
	 public $table = "detail_pinjams";
    public $timestamps = false;
    protected $fillable = [
 		'id_inventaris' , 'jumlah'
    ];
}
