<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'm_fasilitas';

    protected $primaryKey = 'id_fasilitas';

    public function universitas()
    {
        return $this->belongsToMany('App\Model\View\DataUniversitas', 'pvt_fasilitas_universitas', 'id_fasilitas', 'id_universitas');
    }
}
