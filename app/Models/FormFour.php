<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFour extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "form_fours";
    protected $guarded = ['id'];
    protected $fillable = [
        'simpulan',
        'saran',
    ];
}
