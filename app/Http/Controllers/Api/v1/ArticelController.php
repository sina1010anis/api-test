<?php

namespace App\Http\Controllers\Api\v1;

use App\Exceptions\NotFoundError;
use App\Http\Controllers\Controller;
use App\Http\Resources\Article;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\CityCollection;
use App\Http\Resources\MenuCollection;
use App\Models\articel;
use App\Models\City;
use App\Models\menu;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticelController extends Controller
{
    public function index()
    {
        $city = City::all();
        return (new \App\Http\Resources\CityCollection($city));
    }

    public function show(City $id):\App\Http\Resources\City
    {
        throw new NotFoundError();
        //return new \App\Http\Resources\City($id);
    }
}
