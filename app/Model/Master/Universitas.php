<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    protected $table = 'm_universitas';

    protected $primaryKey = 'id_universitas';

    public function fasilitas()
    {
        return $this->belongsToMany('App\Model\Master\Fasilitas', 'pvt_fasilitas_universitas', 'id_universitas', 'id_fasilitas');
    }
}
