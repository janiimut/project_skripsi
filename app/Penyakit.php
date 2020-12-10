<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'penyakit';
}
