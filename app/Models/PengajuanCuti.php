<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class PengajuanCuti extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'pengajuan_cuti';
    protected $fillable = ['tanggal_awal', 'tanggal_akhir', 'jumlah', 'status', 'ket', 'nip'];
    protected $with = ['pegawai'];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'nip',);
    }

    

}
