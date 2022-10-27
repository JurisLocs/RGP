<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land_usage extends Model
{
    use HasFactory;
    protected $fillable =['lands_id','usage','size'];
}
