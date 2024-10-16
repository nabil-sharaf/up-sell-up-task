<?php

namespace App\Services;

use App\DTOs\TaskDTO;
use App\Models\Task;

class TaskService
{
    public function index()
    {
        return Task::all();
    }

    public function createTask(TaskDTO $taskDTO)
    {

        return Task::create($taskDTO->toArray());
    }

    public function updateTask($id, TaskDTO $taskDTO)
    {

        $task = Task::findOrFail($id);
        $task->update($taskDTO->toArray());

        return $task;
    }

    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        return $task->delete();
    }

    public function viewTask($id)
    {
        return Task::findOrFail($id);
    }

}
