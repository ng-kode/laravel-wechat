<?php

namespace Valoot\LaravelWeChat\Services\MenuButton;

use Valoot\LaravelWeChat\Contracts\MenuButton;

class ClickButton extends MenuButton
{
    private $type;
    private $key;

    public function __construct(String $name, String $key)
    {
        $this->name = $name;
        $this->type = 'click';
        $this->key = $key;
    }

    public function toArray()
    {
        return [
            "name" => $this->name,
            "type" => $this->type,
            "key" => $this->key
        ];
    }
}
