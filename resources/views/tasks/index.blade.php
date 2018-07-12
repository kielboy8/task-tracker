@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="jumbotron pt-5 bg-white rounded-0 border-0 shadow-sm fixed-height">
        <div class="container">
            <div class="d-flex flex-row justify-content-between mb-4">
                <h1 class="text-primary"> {{ $report->title }} - Tasks</h1>
                <button type="button" class="btn btn-primary my-auto" data-toggle="modal" data-target="#createTask">
                    Create
                </button>
            </div>
            <div class="row">
                <div class="container-fluid p-0 m-0 bg-white overflow mb-3">
                    <div class="row">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($tasks as $task)
                        <div class="col-12">
                            <div class="card mb-4 mr-2 bg-white">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div class="align-self-start">
                                            <h3 class="card-title">{{ $task->title }}</h5>
                                            <p class="card-text">Status: {{ $task->status }}%</p>
                                            <p class="card-text">Hours Spent: {{ $task->hoursSpent }}</p>
                                            <p class="card-text">Date Created: </br> {{ $task->created_at->toDayDateTimeString() }}</p>
                                        </div>
                                        <div class="align-self-end">
                                            <form method="POST" action="/tasks/delete/{{ $task->id }}">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <a class="btn btn-primary btn-sm" href="/reports/{{ $report->id }}/tasks/{{ $task->id }}">View</a>
                                                <button type="button" class="btn btn-success btn-sm my-auto" data-title="{{ $task->title }}" data-id="{{ $task->id }}" data-description="{{ $task->description }}" data-status="{{ $task->status }}" data-hours="{{ $task->hoursSpent }}" data-toggle="modal" data-target="#editTask">
                                                    Update
                                                </button>
                                                <input type="submit" name="delete" class="btn btn-danger btn-sm" value="Delete">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <a href="/reports/" class="btn btn-primary float-right">Back</a>
        </div>
    </div>
</div>

@include ('tasks.modals')
@endsection
