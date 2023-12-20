<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LombaMenari extends Model
{
    use HasFactory;
    protected $table = '_lomba_menari';
    //protected $fillable = ['nama','asal_sekolah'];
    protected $guarded = [];
}
