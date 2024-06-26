<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'status' => $this->status,
            'status_label' => $this->statusOptions[$this->status] ?? 'Status não localizado',
            'description' => $this->description,
            'user' => new UserResource($this->user),
            'lesson' => new LessonResource($this->lesson)
        ];
    }
}
