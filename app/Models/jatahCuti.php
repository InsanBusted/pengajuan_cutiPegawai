<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class jatahCuti extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'jatah_cuti';

    protected $fillable = ['tahun', 'jumlah', 'nip'];
    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'nip');
    }
}
