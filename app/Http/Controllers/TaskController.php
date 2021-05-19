<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(TaskStoreRequest $request)
    {
        $data = $request->validated();
        $user = Task::firstOrCreate($data);
        echo $user->toJson();
        dd($request->input('param1', 'default-value-1'));
    }
}
