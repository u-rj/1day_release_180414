<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function index(Request $request) {
    $users = User::where('project_id', $request->project_id)->get();
    return response()->json($users);
  }

  public function store(Request $request) {
    $user = new User;
    $user->name = $request->name;
    $user->project_id = $request->project_id;
    if ($user->save()) {
      return response()->json(['status' => 'success']);
    } else {
      return response()->json(['status' => 'failure']);
    }
  }
}
