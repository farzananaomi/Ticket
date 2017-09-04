@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="header"> <h3>Listed Sub Centre</h3>
                    <div class="pull-right">
                        <a href="#" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#operation-modal">Add
                            Sub Centre</a>
                    </div>
                </div>

                <div class="content">
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="operation-modal" tabindex="-1" role="dialog"
         aria-labelledby="operation-form-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="operation-form-title">
                        Add new Sub Centre</h4>
                </div>
                <form role="form" action="{{ route('sub_centres.store') }}" method="post" id="operation-form">
                {!! csrf_field() !!}
                <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                   name="name" placeholder="Enter Sub Centre Name" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description"
                                      name="description"></textarea>
                        </div>

                        <hr>





                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-default btn-fill" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
<style>
    #categories-table tr td:first-of-type {
        padding-left: 25px;
    }

    .child-indent > td:first-of-type {
        padding-left: 60px !important;
    }

    .parent-row {
        background-color: #f2f2f2;
    }
</style>
@endpush
@push('scripts')
{!! $dataTable->scripts() !!}
<script>
    $('#edit-modal').on('show.bs.modal', function (e) {
        //get data-id attribute of the clicked element
        let btn = $(e.relatedTarget);
        let action = btn.data('action');
        let name = btn.data('name');
        let description = btn.data('description');
        let type = btn.data('type');
        let parent_id = btn.data('parent_id');
        let questionId = $(e.relatedTarget).data('question-id');
        let submissionId = $(e.relatedTarget).data('submission-id');
        $(e.currentTarget).find('#edit-operation-form').attr('action', action);
        $(e.currentTarget).find('#edit-name').val(name);
        $(e.currentTarget).find('#edit-description').val(description);
        $(e.currentTarget).find('#edit-parent_id').val(parent_id).trigger('change');

        $(e.currentTarget).find('[name="type"]').prop('checked', type == 'sub-category');
    });
</script>
@endpush