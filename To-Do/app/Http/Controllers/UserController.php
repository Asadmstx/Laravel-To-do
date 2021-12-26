<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Tasks;

class UserController extends Controller {


    public function addTask(UserRequest $req) {
        $tasks = new Tasks();
        $tasks->task = $req->input('task');
        $tasks->save();

        return redirect()->route('user-page');
    }

    public function getData() {
        $note = Tasks::all();
        return view('user', ['data' => $note->sortByDesc('id')]);
    }

    public function destroyData($id) {
        Tasks::find($id)->delete();
        return redirect()->route('user-page');
    }

}
