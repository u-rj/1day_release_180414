<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
  public function index() {
    $projects = Project::all();
    return response()->json($projects);
  }

  public function store(Request $request) {
    $project = new Project;
    $project->name = $request->name;
    if ($project->save()) {
      return response()->json(['status' => 'success']);
    } else {
      return response()->json(['status' => 'failure']);
    }
  }
}
