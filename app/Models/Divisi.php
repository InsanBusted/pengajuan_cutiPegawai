<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Divisi extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'divisi';

    protected $fillable = ['kode', 'nama', 'manager'];

    public function pegawai(){
        return $this->hasMany(Pegawai::class, 'divisi_id');
    }

}
