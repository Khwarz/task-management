<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
	public function index()
	{
		$tasks = Task::paginate(8);
		return view("welcome", ["tasks" => $tasks]);
	}

	public function create()
	{
		return view("taches.create");
	}

	public function store(TaskRequest $request)
	{
		Task::create(["name" => $request->name]);
		return redirect()->route("welcome");
	}

	public function edit(Task $task)
	{
		return view("taches.edit", ["task" => $task]);
	}

	public function update(TaskRequest $request, Task $task)
	{
		$task->forceFill(["name" => $request->name])->save();
		return redirect()->route("welcome");
	}

	public function destroy(Task $task)
	{
		$task->delete();
		return redirect()->route("welcome");
	}
}
