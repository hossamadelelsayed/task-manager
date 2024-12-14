<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface TaskInterface
{
    public function getTasks() : ?Collection;
}
