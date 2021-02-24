<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
  use HasFactory;
    protected $fillable = ['kode_kota','nama_kota','provinsi_id'];
    public $timestamps = true; 
 
    public function provinsi(){
        return $this->belongsTo('App\Models\Provinsi', 'provinsi_id');
    }

    public function kecamatan(){
        return $this->hasMany('App\Models\Kecamatan', 'id_kota');
    }
}