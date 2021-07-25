<?php


namespace App\repository\View;


use Illuminate\Support\Facades\View;

class Composer
{
    public function show()
    {
        return [
            View::composer(['*'] , bank::class),
        ];
    }
}
