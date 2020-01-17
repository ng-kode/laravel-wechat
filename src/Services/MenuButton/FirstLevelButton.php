<?php

namespace App\Services\MenuButton;

use App\Contracts\MenuButton;

class FirstLevelButton extends MenuButton
{
    private $sub_button;

    public function __construct(String $name, Array $sub_button)
    {
        $this->name = $name;
        $this->sub_button = $sub_button;
    }

    public function toArray()
    {
        return [
            "name" => $this->name,
            "sub_button" => $this->sub_button
        ];
    }
}
