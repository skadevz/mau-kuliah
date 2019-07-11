<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    protected $table = 'm_universitas';

    protected $primaryKey = 'id_universitas';

    public function jurusan()
    {
        return $this->belongsToMany('App\Model\Master\Jurusan', 'pvt_jenjang_jurusan_universitas', 'id_universitas', 'id_jurusan')->withPivot('id_jenjang');
    }

    public function fasilitas()
    {
        return $this->belongsToMany('App\Model\Master\Fasilitas', 'pvt_fasilitas_universitas', 'id_universitas', 'id_fasilitas');
    }

    public function tempat_umum()
    {
        return $this->belongsToMany('App\Model\Master\TempatUmum', 'pvt_tempat_umum_universitas', 'id_universitas', 'id_tempat_umum');
    }
}
