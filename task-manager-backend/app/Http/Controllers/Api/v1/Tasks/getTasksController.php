<?php

namespace App\Http\Controllers\Api\v1\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Services\TaskService;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class getTasksController extends Controller
{
    use ApiResponses;

    public function __construct(protected TaskService $taskService)
    {
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $result = $this->taskService->getTasks();
            return $this->success(TaskResource::collection($result), 'Tasks fetched successfully');
        } catch (\Exception $e) {
            return $this->internal_error($e->getMessage());
        }
    }
}
