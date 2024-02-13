<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryData extends Model
{
    use HasFactory;
    protected $table = "temporary_data";
    protected $guarded = ['id'];
    protected $fillable = [
        'email',
        'nama',
        'kecepatan',
        'ketepatan',
        'respon',
        'layanan',
        'pegawai',
        'etika',
        'kecepatanOne',
        'ketepatanTwo',
        'responThree',
        'layananFour',
        'pegawaiFive',
        'etikaSix',
        'simpulan',
        'saran',
    ];
}
