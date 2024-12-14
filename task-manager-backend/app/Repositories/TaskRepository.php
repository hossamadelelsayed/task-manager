<?php

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class TaskRepository implements TaskInterface
{
    /**
     * @return Collection|null
     */
    public function getTasks(): ?Collection
    {
        try {
            return Task::limit(10)->get();
        } catch (\Exception $e) {
            Log::error('TaskRepository [getTasks]  ' . $e->getMessage());
        }
    }
}
