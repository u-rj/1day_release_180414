<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
  public function index() {
    $tasks = Task::all();
    return response()->json($tasks);
  }

  public function store(Request $request) {
    $task = new Task;
    $task->name = $request->name;
    $task->project_id = $request->project_id;
    $task->user_id = $request->user_id;
    $task->category_id = $request->category_id;
    $task->status_id = $request->status_id;
    $task->ideal_start_time = $request->ideal_start_time;
    $task->ideal_end_time = $request->ideal_end_time;
    $task->real_start_time = $request->real_start_time;
    $task->real_end_time = $request->real_end_time;
    if ($task->save()) {
      return response()->json(['status' => 'success']);
    } else {
      return response()->json(['status' => 'failure']);
    }
  }

  public function update(Request $request, $id) {
    $task = Task::find($id);
    $requestAll = $request->all();
    foreach ($requestAll as $key => $value) {
      $task[$key] = $value;
    }
    if ($task->save()) {
      return response()->json(['status' => 'success']);
    } else {
      return response()->json(['status' => 'failure']);
    }
  }
}
