<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Pegawai extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'pegawai';
    protected $fillable = ['nip', 'gender', 'tmp_lahir', 'tgl_lahir', 'telpon', 'alamat', 'divisi_id', 'user_id'];

    protected $with = ['divisi'];

    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }

    public function pengajuanCuti(){
        return $this->hasMany(PengajuanCuti::class, 'nip');
    }
    public function jatahCuti(){
        return $this->hasMany(jatahCuti::class, 'nip');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
