<?php

namespace App\Model\View;

use Illuminate\Database\Eloquent\Model;

class DataUniversitas extends Model
{
    protected $table = "v_data_universitas";
    public $primaryKey = null;
    public $incrementing = false;

    public function fasilitas()
    {
        // return $this->belongsToMany('App\Model\Master\Fasilitas', 'pvt_fasilitas_universitas', 'id_universitas', 'id_fasilitas');
        return $this->belongsToMany('App\Model\Master\Fasilitas', 'pvt_fasilitas_universitas', 'id_universitas', 'id_fasilitas');
    }
}
