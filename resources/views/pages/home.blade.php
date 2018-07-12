@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="jumbotron pt-5 bg-white rounded-0 border-0 shadow-sm fixed-height">
    	<div class="container">
    		<div class="d-flex flex-row justify-content-between mb-4">
                <h1 class="text-primary">Dashboard</h1>
            </div>
            <div class="row">
                <h3 class="text-primary">Recent Tasks</h3>
            	<div class="container-fluid p-0 m-0 bg-white overflow">
            		<div class="row">
            			@if (session('status'))
				            <div class="alert alert-success" role="alert">
				                {{ session('status') }}
				            </div>
				        @endif
				        @foreach ($reports as $report)
                        <div class="col-6">
                            <div class="card mb-4 mr-2 rounded-0 bg-white">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $report->title }}</h5>
                                    <p class="card-text">Date Created: <br/> {{ $report->created_at->toDayDateTimeString() }}</p>
                                    <form method="POST" action="/reports/delete/{{ $report->id }}">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        <a class="btn btn-primary btn-sm" href="/reports/{{ $report->id }}/tasks">View</a>
                                        <button type="button" class="btn btn-success btn-sm my-auto" data-title="{{ $report->title }}" data-id="{{ $report->id }}" data-toggle="modal" data-target="#editJournal">
                                            Edit
                                        </button>
                                        <input type="submit" name="delete" class="btn btn-danger btn-sm" value="Delete">
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
            		</div>
            	</div>
            </div>
    	</div>
    </div>
</div>
@endsection
