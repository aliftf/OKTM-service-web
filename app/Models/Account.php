<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $primaryKey = 'acc_id';

    protected $guarded = [
        'acc_id',
    ];

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class);
    }
}
