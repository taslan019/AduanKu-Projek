<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $fillable = ['nama'];

     public function aduan(){
        return $this->hasMany(Aduan::class);
    }
}
