<?php

namespace App\Models;

use App\Models\QueryFilters;

class TaskFilters extends QueryFilters
{

    /**
     * Filter by id.
     *
     * @param  string $value
     * @return Builder
     */
    public function id($value)
    {
        return $this->builder->where('id', $value);
    }

    /**
     * Filter by name.
     *
     * @param  string $value
     * @return Builder
     */
    public function name($value)
    {
        return $this->builder->where('name', 'LIKE', "%{$value}%");
    }

    /**
     * Filter by description.
     *
     * @param  string $value
     * @return Builder
     */
    public function description($value)
    {
        return $this->builder->where('description', 'LIKE', "%{$value}%");
    }

    /**
     * Filter by time_tracking.
     *
     * @param  string $value
     * @return Builder
     */
    public function time_tracking($value)
    {
        return $this->builder->where('time_tracking', $value);
    }

}
