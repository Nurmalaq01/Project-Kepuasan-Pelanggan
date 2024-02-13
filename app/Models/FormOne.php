<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormOne extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "form_ones";
    protected $guarded = ['id'];
    protected $fillable = [
        'email',
        'nama',
    ];
}
