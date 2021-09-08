<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Mahasiswa extends Eloquent
{
    protected $connection = "mongodb";
    protected $collection = "mahasiswas";
    protected $fillable = ['nama', 'jurusan', 'waktu', 'gender', 'email'];
}
