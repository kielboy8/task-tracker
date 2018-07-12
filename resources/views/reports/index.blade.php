@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="jumbotron pt-5 bg-white rounded-0 border-0 shadow-sm fixed-height">
        <div class="container">
            <div class="d-flex flex-row justify-content-between mb-4">
                <h1 class="text-primary">Journals</h1>
                <button type="button" class="btn btn-primary my-auto" data-toggle="modal" data-target="#createJournal">
                    Create
                </button>
            </div>
            <div class="row">
                <div class="container-fluid p-0 m-0 bg-white overflow">
                    <div class="row">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($reports as $report)
                        <div class="col-12">
                            <div class="card mb-4 mr-2 rounded-0 bg-white">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div class="align-self-start">
                                            <h3 class="card-title">{{ $report->title }}</h3>
                                            <p class="card-text">Date Created: <br/> {{ $report->created_at->toDayDateTimeString() }}</p>
                                        </div>
                                        <div class="align-self-end">
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
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include ('reports.modals')
@endsection
