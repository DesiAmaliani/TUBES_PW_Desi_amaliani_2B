<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use SoftDeletes;
 
    protected $fillable = [
        'nama', 'anggota', 'posisi'
    ];
    protected $dates = ['deleted_at'];
}
