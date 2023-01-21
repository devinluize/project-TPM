<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
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
        'CV',
        'Kartu',
    ];

    public function group(){
        return $this->belongsTo(group::class);
    }
}
