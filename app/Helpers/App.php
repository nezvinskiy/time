<?php

namespace App\Helpers;

class App
{

    public static function title($title)
    {
        return implode(' | ', array_merge(array_reverse($title), [env('APP_NAME')]));
    }

}
