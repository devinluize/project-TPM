<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama',
        'Email',
        "Whatsapp",
        'Line',
        'Github',
        'Tpt_Lahir',
        'Tgl_Lahir',
        'Foto',
        'CV',
        'Kartu',
    ];
}
