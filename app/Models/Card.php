<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function banks()
    {
        return $this->belongsTo(Bank::class , 'bank_id' , 'id');
    }

}
