<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable =['user_id','name','Cad_number','status'];

    public function lands()
    {
        return $this->hasMany(Land::class);
    }
}
