<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiRumah extends Model
{
    protected $fillable = [
        'fondasi', 'atap', 'lantai', 'dinding', 'jendela', 'ventilasi', 'plafon',
    ];

    public function pendataanRumah()
    {
        return $this->belongsTo(PendataanRumah::class);
    }

    protected $table = 'kondisi_rumah';
}
