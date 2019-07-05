<?php

namespace App\Model\Pivot;

use Illuminate\Database\Eloquent\Model;

class JenJurUniv extends Model
{
    protected $table = 'pvt_jenjang_jurusan_universitas';

    // protected $primaryKey = 'id_';

    public $timestamps = false;

    public $incrementing = false;
}
