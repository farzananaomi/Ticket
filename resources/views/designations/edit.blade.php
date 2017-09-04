@extends('layouts.base')

@section('content')
    <form action="{{ route('designations.update', $designation->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('put') !!}
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">Create Sub Centre</div>
                    <div class="content">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-xs-12">
                                    @include('partials.bs_text', ['name' => 'name', 'label' => 'Sub Centres Name', 'useOld' => $designation->name, 'horizontal' => 'true', 'extras' => 'required="required"'])
                                    @include('partials.bs_textarea', ['name' => 'description', 'label' => 'Description', 'useOld' => $designation->description, 'horizontal' => 'true', 'extras' => 'required="required"'])

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
                    <button type="submit" class="btn btn-fill btn-danger">Update Sub Centre</button>
                    <a href="{{ route('designations.index') }}"
                       class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Cancel</a>
                </div>
            </div>
        </div>


    </form>

@endsection