<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $fillable = ['kode_provinsi','nama_provinsi'];
    public $timestamps = true ;

    public function Provinsi(){
        return $this->hasMany('App/Models/Kota','provinsi_id');
    }
   
}
