<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'm_provinsi';

    protected $primaryKey = 'id_provinsi';

    public function kota()
    {
        return $this->hasMany('App\Model\Master\Kota', 'id_provinsi', 'id_provinsi');
    }
}
