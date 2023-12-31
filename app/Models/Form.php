<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'nim',
        'tipe',
        'status',
        'tanggal',
        'ktm',
        'ksm',
        'surat_kehilangan',
        'bukti_pembayaran',
        'komentar',
    ];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function staff(){
        return $this->hasMany(Staff::class);
    }
}
