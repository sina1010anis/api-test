<?php


namespace App\repository\Filter\Core;


use Illuminate\Support\Str;

abstract class FilterAbstract
{
    public function nameClass()
    {
        return Str::snake(class_basename($this));
    }

    public function handle($request,\Closure $next)
    {
        if (!request()->has($this->nameClass())){
            return $next($request);
        }
        return $this->install($request , $next);
    }

    public abstract function install($request,$next);
}
