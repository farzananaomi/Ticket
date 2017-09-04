@extends('layouts.base')
@section('content')
    <form action="{{ route('tickets.adminupdate', $ticket->id) }}" method="post" enctype="multipart/form-data"
          class="form-horizontal">
        {!! csrf_field() !!}
        {!! method_field('put') !!}
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">Create Ticket</div>
                    <div class="content">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-xs-12">

                                        @include('partials.bs_static', ['label' => 'Sub Center', 'value' => $ticket->sub_centre->name])

                                    <div class="form-group">
                                        @include('partials.bs_static', ['label' => 'POP', 'value' => $ticket->pop->name])

                                    </div>

                                    @include('partials.bs_static', ['label' => 'Request Date', 'value' => $ticket->request_date])
                                    @include('partials.bs_static', ['label' => 'Description', 'value' => $ticket->work_dscription])

                                <div class="form-group">
                                    <label for="approval_status" class="col-sm-3 control-label">Action</label>
                                    <div class="col-sm-8">

                                        <select class="form-control select2" id="approval_status" name="approval_status">
                                            <option value="1"> Accepted</option>
                                            <option value="0"> Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3"></label>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-fill btn-info">Update Ticket</button>
                        <a href="{{ route('products.index') }}"
                           class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
<script>

    $(document).ready(function () {
        $('.datepicker').datetimepicker(
            {
                format: 'YYYY-MM-DD'
            }
        );
        sub_centre_select();
        pop_select();
    });


    function sub_centre_select() {
        $.ajax({
            url: "{{ route('ajax.sub_centre') }}", //'ajax.category'
            type: "get",
            success: function (result) {
                //  document.getElementById('category_id_h[0]').innerHTML = "";
                for (i = 0; i < result.length; i++) {
                    $("#sub_centre_id").append('<option value="' + result[i].id + '">' + result[i].text + '</option>');
                }

            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
    function pop_select() {
        $.ajax({
            url: "{{ route('ajax.pop') }}", //'ajax.category'
            type: "get",
            success: function (result) {
                //  document.getElementById('category_id_h[0]').innerHTML = "";
                for (i = 0; i < result.length; i++) {
                    $("#pop_id").append('<option value="' + result[i].id + '">' + result[i].text + '</option>');
                }

            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

</script>


@endpush