<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmnt_rly extends Model
{
    use HasFactory;
    protected $fillable = ['img','name','date','description'];
}
