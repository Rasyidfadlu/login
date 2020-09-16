<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public $table = "t_berita";

    protected $fillable = [
        'Judul', 'Headline', 'file', 'Isi', 'Pengirim', 'Tanggal'
    ];
}