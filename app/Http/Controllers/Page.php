<?php

namespace App\Http\Controllers;

use App\repository\Core\Show;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Page extends Controller
{
    public function test(Show $show)
    {
        //$show = new Show("test");
        $show->edit('89764232118')->show();
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
