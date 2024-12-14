<?php

namespace App\Services;

use App\Repositories\TaskInterface;
use Illuminate\Database\Eloquent\Collection;

class TaskService
{
    public function __construct(
        protected TaskInterface $taskRepository
    ) {
    }

    /**
     * @return Collection
     */
    public function getTasks() : Collection
    {
        return $this->taskRepository->getTasks();
    }
}
