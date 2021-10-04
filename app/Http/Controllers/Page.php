<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Card;
use App\repository\Core\Show;
use App\repository\Filter\Id;
use App\repository\Filter\Sort;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class Page extends Controller
{
    public function test()
    {
        echo '5'.'<br>';
        echo 'AbxSe'.'<br>';
        echo 'AbXse'.'<br>';
        echo '2'.'<br>';

//        $data = Card::all();
//        return Relation::morphMap([
//            'data' => $data->map(function ($item , $key){
//                return [
//                  'number' => $item->number,
//                  'time_set' => $item->created_at
//                ];
//            }),
//        ]);
    	//return view('welcome');
        /*$data = app(Pipeline::class)->send(Bank::query())->through([Sort::class, Id::class])->thenReturn()->get();
        if ($data->count()
        > 0)
            return $data;
        else
            abort(404);*/

        //$show = new Show("test");
        //$show->edit('89764232118')->show();
        //return view('welcome');
/*        $a= [1,2,3,4,5];
        $b= [0,3,2,1,4,5];
        $c=[];
        if (count($a) == count($b))
            for ($i=0;$i<count($a);$i++)
                foreach ($b as $j)
                    if ($a[$i] == $j)
                        $c[]=$a[$i];
        dd($c);*/

/*    	$carbon = new Carbon();
    	return $carbon->nowWithSameTz();*/
        //return jdate(Carbon::tomorrow())->format('%B %d، %Y');
        //return new TestWeb(Item::all());
/*        BankFactory::new()->count(10)->create();
        CardFactory::new()->count(50)->create();*/
    }
}
