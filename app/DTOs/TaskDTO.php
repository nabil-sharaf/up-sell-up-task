<?php
namespace App\DTOs;

class TaskDTO
{
    public $title;
    public $description;
    public $assigned_to;
    public $status;

    public function __construct(array $data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->assigned_to = $data['assigned_to'] ?? null;
        $this->status = $data['status'] ?? 'pending';
    }
    public function toArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'assigned_to' => $this->assigned_to,
            'status' => $this->status,
        ];
    }
}
