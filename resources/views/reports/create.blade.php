@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="jumbotron bg-white rounded-0 border-0 shadow-sm overflow">
        <div class="container">
            <div class="d-flex flex-row justify-content-between mb-4">
                <h1 class="text-primary">Create a Report</span>
            </div>
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-6">
                    <form action="/reports" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="reportTitle">Report Title:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
