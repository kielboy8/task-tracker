<!-- Create Task Modal -->
<div class="modal fade" id="createTask" tabindex="-1" role="dialog" aria-labelledby="createTask" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createJournal">Create a Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if (session('status'))
                <div class="modal-body mx-5">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            <form action="/reports/{{ $report->id }}/tasks" method="POST">
                <div class="modal-body mx-5">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Task Modal -->
<div class="modal fade" id="editTask" tabindex="-1" role="dialog" aria-labelledby="editTask" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if (session('status'))
                <div class="modal-body mx-5">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            <form action="/tasks/update" method="POST">
                <div class="modal-body mx-5">
                    {{ method_field('PATCH') }}
                    @csrf
                    <input type="hidden" name="id" id="id" value="">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save Changes">
                </div>
            </form>
        </div>
    </div>
</div>