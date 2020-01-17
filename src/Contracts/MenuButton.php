<?php

namespace Valoot\LaravelWeChat\Contracts;

abstract class MenuButton
{
    protected $name;

    abstract public function toArray();
}
