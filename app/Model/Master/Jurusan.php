<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'm_jurusan';

    protected $primaryKey = 'id_jurusan';

    public function detail()
    {
        return $this->hasOne('App\Model\DetailJurusan');
    }
}
