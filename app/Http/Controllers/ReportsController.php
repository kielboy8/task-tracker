<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use App\Task;
use Carbon\Carbon;

class ReportsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$reports = Report::where('user_id', auth()->id())->get();
    	return view('reports.index', compact('reports'));
    }

    public function update(Request $request) {
        $report = Report::findOrFail($request->id);
        $report->update($request->all());
        return back();
    }

    public function store() {
    	$this->validate(request(), [
    		'title' => 'required'
    	]);

    	auth()->user()->publishReport(
    		new Report(request(['title']))
    	);

    	return redirect('/reports');
    }

    public function delete(Report $report) {
        $report->delete();
        return back();
    }
}
