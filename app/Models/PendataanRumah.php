<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendataanRumah extends Model
{
    protected $fillable = [
        'no_kk',
        'nama_kepala_keluarga',
        'alamat',
        'rt_rw',
        'kode_pos',
    ];

    public function identitasPenghuni()
    {
        return $this->hasMany(IdentitasPenghuni::class);
    }

    public function kondisiRumah()
    {
        return $this->hasOne(KondisiRumah::class);
    }

    public function getMaskedNoKKAttribute()
    {
        $noKK = $this->attributes['no_kk'];
        return substr_replace($noKK, str_repeat('*', 10), 3, 10);
    }

    public function getMaskedNIKAttribute()
    {
        // Assuming you have a relation to IdentitasPenghuni
        $firstNIK = $this->identitasPenghuni->first()->nik ?? '';

        return substr_replace($firstNIK, str_repeat('*', 10), 3, 10);
    }

    protected $table = 'pendataan_rumah';
}
