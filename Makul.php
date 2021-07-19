<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makul extends model
{
    protected $table        = 'makul';
    protected $fillable     = ['kd_makul', 'nama_makul', 'sks'];
    public    $timestamps   = false;

    public function nilai()
    {
        return $this->hasOne(nilai::class, 'makul_id', 'id');
    }
}
