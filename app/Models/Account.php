<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Authenticatable
{
    use HasFactory;

    protected $table = 'accounts';

    protected $primaryKey = 'acc_id';

    protected $guarded = [
        'acc_id',
    ];

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class, 'acc_id', 'acc_id');
    }
}
