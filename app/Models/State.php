<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function citys()
    {
        return $this->hasMany(\App\Models\City::class , 'state_id','id');
    }
}
