<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasPenghuni extends Model
{
    protected $fillable = [
        'nama', 'nik', 'jenis_kelamin', 'ttl', 'pekerjaan',
    ];

    public function pendataanRumah()
    {
        return $this->belongsTo(PendataanRumah::class);
    }

    protected $table = 'identitas_penghuni';
}
