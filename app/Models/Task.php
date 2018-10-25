<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use Filterable;

    protected $fillable = [
        'name', 'description', 'time_tracking',
    ];

}
