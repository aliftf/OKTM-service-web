<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';

    protected $guarded = [
        'nim',
    ];

    public function form(){
        return $this->hasMany(Form::class);
    }

    public function account(){
        return $this->belongsTo(Account::class);
    }
}
