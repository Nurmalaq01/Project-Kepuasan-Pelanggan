<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTwo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "form_twos";
    protected $guarded = ['id'];
    protected $fillable = [
        'kecepatan',
        'ketepatan',
        'respon',
        'layanan',
        'pegawai',
        'etika',
    ];
}
