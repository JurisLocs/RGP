<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $fillable =['properties_id','Cad_sign','size','Date_of_survey'];
    public function landUsages()
    {
        return $this->hasMany(Land_usage::class);
    }
}
