<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Pegawai extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'pegawai';
    protected $fillable = ['nama', 'gender', 'tmp_lahir', 'tgl_lahir', 'telpon', 'alamat', 'divisi_id'];

    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }

   
}
