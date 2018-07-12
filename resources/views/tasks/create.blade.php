@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="jumbotron bg-white rounded-0 border-0 shadow-sm overflow">
        <div class="container">
            <div class="d-flex flex-row mb-4">
                <h1 class="text-primary">
                    {{ $report->title . ' - '}}
                    Create a Task
                </h1>
            </div>
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col">
                    <form action="/reports/{{ $report->id }}/tasks" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Task Title: </label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Task Description: </label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                        <label for="status">Percent Complete: </label>
                        <div class="input-group mb-3">
                            <input type="number" name="status" id="status" class="form-control">
                            <div class="input-group-append percent-box">
                                <span class="input-group-text" id="basic-addon2">%</span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="hoursSpent">Hours Spent: </label>
                            <input type="number" name="hoursSpent" id="hoursSpent" class="form-control hours-box">
                        </div>
                        <div class="form-inline">
                            <input type="submit" class="btn btn-primary mr-3">
                            <a href="javascript:history.back()" class="btn btn-primary">Back</a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
