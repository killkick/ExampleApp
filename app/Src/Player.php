<?php

namespace App\Src;

class Player
{
    public function __construct(
        public int    $id,
        public string $name,
        public int    $age,
        public int    $health
    )
    {

    }
}
