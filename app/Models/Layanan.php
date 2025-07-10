<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $fillable = ['nama'];

    public function aduan(){
        return $this->hasMany(Aduan::class);
    }
}
