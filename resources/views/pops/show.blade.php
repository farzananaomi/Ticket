@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="header">Pop</div>
                <div class="content">
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-xs-12">
                                @include('partials.bs_static', ['label' => 'Name', 'value' => $pop->name])
                                @include('partials.bs_static', ['label' => 'Voter No', 'value' => $pop->description])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <a href="{{ route('pops.edit', $pop->id) }}"
               class="btn btn-fill btn-info"><i class="fa fa-pencil"></i> Edit Member Info</a>

            <a href="{{ route('pops.index') }}"
               class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
@endsection

