<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rujuk extends Model
{
    //
    public $table = 't_rujuk';

    protected $fillable = [
        'img', 'nm_rumahsakit', 'Alamat', 'Tingkat_rujukan'
    ];
}
