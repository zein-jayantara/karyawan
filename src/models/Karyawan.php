<?php

namespace Jalinmodule\Karyawan\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name','alamat','telp'
    ];

}
