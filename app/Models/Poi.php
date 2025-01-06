<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Poi extends Model
{
    public $table = "pois";
    protected $fillable = ["nama", "deskripsi", "area_id"];

    public function areas(){
        return $this->belongTo(Area::class);
    }
}
