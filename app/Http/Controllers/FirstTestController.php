<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\User;
use Illuminate\Http\Request;

class FirstTestController extends Controller
{
    public function index()
    {
        $task = Task::where('user_id', 1)->where('name', 'name_1')->get();
        foreach ($task as $item){
            echo $item->description;
        }

        $task = Task::where('description', 'desc_1')->orWhere('name', 'name_1')->take(5)->get();
        foreach ($task as $value){
            echo $value->name;
        }

        $task = Task::join('users', 'tasks.user_id', '=', 'users.id')->select('tasks.*', 'users.email')->get();
        foreach ($task as $item) {
            echo $item->id . $item->email . $item->name;
        }

        $user = Task::find(1)->user;
        echo $user->first_name;
        echo $user->second_name;

        $task = User::find(1)->tasks;
        foreach ($task as $item) {
            echo $item->name . $item->description;
        }

        $users = User::all();
        foreach ($users as $user){
            echo $user->fullname."|";
        }
    }
}

