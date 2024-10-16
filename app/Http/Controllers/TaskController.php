<?php

namespace App\Http\Controllers;

use App\DTO\TaskDTO;
use App\Http\Requests\TaskRequest;
use App\Services\TaskService;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $tasks = $this->taskService->index();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = $this->taskService->viewTask($id);
        return view('tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(TaskRequest $request)
    {

        $taskDTO = new TaskDTO($request->validated());

        $this->taskService->createTask($taskDTO);
        return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
        $task = $this->taskService->viewTask($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(TaskRequest $request, $id)
    {
        $taskDTO = new TaskDTO($request->validated());

        $this->taskService->updateTask($id, $taskDTO);
        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $this->taskService->deleteTask($id);
        return redirect()->route('tasks.index');
    }
}
