<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Input;

class App
{

    public static function title($title)
    {
        return implode(' | ', array_merge(array_reverse($title), [env('APP_NAME')]));
    }

    public static function sortRoute($route, $column)
    {
        return route($route, array_merge(self::getInputAll(), [
            'sort' => (strpos(Input::get('sort'), '-') === 0) ? $column : '-' . $column,
        ]));
    }

    public static function sortClass($column)
    {
        if (trim(Input::get('sort'), '-') == $column) {
            return (strpos(Input::get('sort'), '-') === 0) ? 'desc' : 'asc';
        }

        return null;
    }

    public static function getInputAll()
    {
        return Input::all();
    }

}
