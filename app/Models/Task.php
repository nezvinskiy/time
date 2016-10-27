<?php

namespace App\Models;

use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'name', 'description',
    ];

    public function sort()
    {
        if (Input::get('sort')) {
            return $this->orderBy(Input::get('sort'), Input::get('direction'))->paginate(env('PAGE_SIZE', 5));
        }

        return $this->paginate(env('PAGE_SIZE', 5));
    }

}
