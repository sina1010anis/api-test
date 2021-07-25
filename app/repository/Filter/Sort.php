<?php


namespace App\repository\Filter;


use App\repository\Filter\Core\FilterAbstract;
use Illuminate\Support\Str;

class Sort extends FilterAbstract
{
    public function install($request , $next)
    {
        return $next($request)->orderBy('name' , request($this->nameClass()));
    }
}
