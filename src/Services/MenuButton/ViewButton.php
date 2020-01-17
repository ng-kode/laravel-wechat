<?php

namespace Valoot\LaravelWeChat\Services\MenuButton;

use Valoot\LaravelWeChat\Contracts\MenuButton;

class ViewButton extends MenuButton
{
    private $type;
    private $url;

    public function __construct(String $name, String $url)
    {
        $this->type = 'view';
        $this->name = $name;
        $this->url = $url;
    }

    public function toArray()
    {
        return [
            "name" => $this->name,
            "type" => $this->type,
            "url" => $this->url
        ];
    }
}

