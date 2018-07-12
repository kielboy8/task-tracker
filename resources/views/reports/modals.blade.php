<!-- Create Journal Modal -->
<div class="modal fade" id="createJournal" tabindex="-1" role="dialog" aria-labelledby="createJournal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createJournal">Create a Journal</h5>
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
            <form action="/reports" method="POST">
                <div class="modal-body mx-5">
                    @csrf
                    <div class="form-group">
                        <label for="reportTitle">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
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

<!-- Edit Journal Modal -->
<div class="modal fade" id="editJournal" tabindex="-1" role="dialog" aria-labelledby="editJournal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Journal</h5>
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
            <form action="/reports/update" method="POST">
                <div class="modal-body mx-5">
                    {{ method_field('PATCH') }}
                    @csrf
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group">
                        <label for="reportTitle">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Journal Title">
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