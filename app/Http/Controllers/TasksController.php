<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use App\Task;

class TasksController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Report $report) {
    	$tasks = Task::where('report_id', $report->id)->get();
    	return view('tasks.index', compact(['tasks', 'report']));
    }

    public function create(Report $report) {
        $tasks = Task::where('report_id', $report->id)->get();
    	return view('tasks.create', compact(['tasks', 'report']));
    }

    public function store($report) {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|max:100',
            'hoursSpent' => 'required'
        ]);

        Task::create([
            'report_id' => $report,
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status'),
            'hoursSpent' => request('hoursSpent')
        ]);

        return redirect('/reports/' . $report . '/tasks');
    }

    public function show(Report $report, Task $task) {
        return view('tasks.show', compact(['task', 'report']));
    }

    public function update(Request $request) {
        $task = Task::findOrFail($request->id);
        $task->update($request->all());
        return back();
    }

    public function delete(Task $task) {
        $task->delete();
        return back();
    }
}
