<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function menus()
    {
        return $this->belongsTo(menu::class , 'menu_id' , 'id') ;
    }
}
