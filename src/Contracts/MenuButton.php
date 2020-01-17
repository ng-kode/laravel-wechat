<?php

namespace App\Contracts;

abstract class MenuButton
{
    protected $name;

    abstract public function toArray();
}
