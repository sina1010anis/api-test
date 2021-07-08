<?php

namespace App\Http\Controllers;

use App\Models\articel;
use App\Models\City;
use App\Models\menu;
use App\Models\State;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function index()
    {
        $state = City::find(3);
        return $state->states;
    }
}
