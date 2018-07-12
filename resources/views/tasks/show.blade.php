@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="jumbotron bg-white rounded-0 border-0 shadow-sm overflow">
        <div class="container">
            <div class="d-flex flex-column mb-4">
                <h1 class="text-primary"> {{ $task->title }}</h1>
                <h5 class="text-muted">Date Created: {{ $task->created_at->toDayDateTimeString() }}</h5>
            </div>
            <div class="row">
                <div class="col">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="lead mb-5">
                        {{ $task->description }}
                    </p>
                    <a href="javascript:history.back()" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
