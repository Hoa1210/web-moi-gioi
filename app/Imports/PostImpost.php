<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToArray;

class PostImpost implements ToArray
{

    public function array(array $array) : void
    {
        dd($array);
    }
}
