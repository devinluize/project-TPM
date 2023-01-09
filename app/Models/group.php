<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'Password',
        'Binusian',
        'Foto',
    ];

    public function leader(){
        return $this->hasOne(leader::class);
    }
    public function member(){
        return $this->hasMany(member::class);
    }
}
