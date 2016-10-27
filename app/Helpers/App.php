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
        return route($route, [
            'sort' => $column,
            'direction' => (Input::get('direction') == 'asc') ? 'desc' : 'asc'
        ]);
    }

    public static function sortClass($column)
    {
        if (Input::get('sort') == $column) {
            return (Input::get('direction') == 'asc') ? 'asc' : 'desc';
        }

        return null;
    }

    public static function getInputAll()
    {
        return Input::all();
    }

}
