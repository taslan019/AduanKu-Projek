<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $fillable = ['nama','no_hp','email','id_layanan','id_organisasi','deskripsi','no_tiket','status'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class, 'id_organisasi');
    }
}
