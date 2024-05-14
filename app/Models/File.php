<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable =['title','img','user_id'];

    public function user(){
        $this->belongsTo(User::class, 'user_id');
    }
}
