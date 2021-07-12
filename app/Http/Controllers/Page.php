<?php

namespace App\Http\Controllers;

use App\Models\articel;
use App\Models\Bank;
use App\Models\Card;
use App\Models\City;
use App\Models\menu;
use App\Models\State;
use Database\Factories\BankFactory;
use Database\Factories\CardFactory;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function index()
    {
/*        BankFactory::new()->count(10)->create();
        CardFactory::new()->count(50)->create();*/
    }
}
