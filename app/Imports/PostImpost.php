<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostImpost implements ToArray, WithHeadingRow
{

    public function array(array $array) : void
    {
        dd($array);
    }
}
