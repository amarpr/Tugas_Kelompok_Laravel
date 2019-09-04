<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public $timestamps = false;
    // protected $fillable = ['namaBuku','tipeBuku','penulis','penerbit','tahunTerbit','imageBuku','ringkasan'];
    protected $guarded = ['id'];
}
