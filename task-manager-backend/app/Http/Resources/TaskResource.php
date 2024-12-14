<?php

namespace App\Http\Resources;

use App\Enums\Tasks\TaskStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->getStatusName(),
            'created_at' => $this->created_at,
        ];
    }

    /**
     * @return string
     */
    private function getStatusName() : string   
    {
        $statusMap = [
            TaskStatus::PENDING => 'Pending',
            TaskStatus::COMPLETED => 'Completed'
        ];

        return $statusMap[$this->status] ?? 'unknown';
    }
}
