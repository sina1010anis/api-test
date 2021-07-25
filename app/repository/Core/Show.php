<?php


namespace App\repository\Core;


class Show implements ShowInterface
{

    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function edit($new_name)
    {
        $this->name = $new_name;
        return $this;
    }

    public function show()
    {
        var_dump($this->name);
        return $this;
    }
}
