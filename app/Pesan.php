<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    public $table = "contact_us";

    protected $fillable = [
        'nama', 'email', 'phone', 'message'
    ];
}