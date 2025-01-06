<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Poi;

class Area extends Model
{
    public $table = 'areas';
    protected $fillable = ["nama"];

    public function pois(){
        return $this->hasMany(Poi::class);
    }
}
