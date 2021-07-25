<?php


namespace App\repository\Filter;


use App\repository\Filter\Core\FilterAbstract;

class Id extends FilterAbstract
{
    public function install($request, $next)
    {
        return $next($request)->whereId(request($this->nameClass()));
    }
}
