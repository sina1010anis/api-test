<?php


namespace App\repository\View;


use Illuminate\View\View;

class bank
{
    public function compose(View $view)
    {
        return $view->with('bank' , \App\Models\Bank::all());
    }
}
