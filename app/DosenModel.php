<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nip','nama','telp','email'];
}
