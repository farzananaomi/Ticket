@extends('layouts.base')
@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data"
          class="form-horizontal">
        {!! csrf_field() !!}
        {!! method_field('put') !!}
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">Create Pop</div>
                    <div class="content">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">   @include('partials.bs_text', ['name' => 'name', 'label' => 'Name', 'extras' => 'required="required"', 'useOld' => $user->name])</div>
                                        <div class="col-md-6 col-lg-6"> @include('partials.bs_email', ['name' => 'email', 'label' => 'Email', 'extras' => 'required="required"', 'useOld' => $user->email]) </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="sub_centre_id" class="col-md-12 col-lg-12 control-label">Sub
                                                center</label>
                                            <div class="col-md-12 col-lg-12">

                                                <select class="form-control select2" id="sub_centre_id"
                                                        name="sub_centre_id">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">

                                            <label for="sub_centre_id" class="col-md-12 col-lg-12 control-label">Designation</label>
                                            <div class="col-md-12 col-lg-12">

                                                <select class="form-control select2" id="designation_id"
                                                        name="designation_id">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">   @include('partials.bs_text', ['name' => 'contact', 'label' => 'Contact', 'extras' => 'required="required"', 'useOld' => $user->contact])</div>
                                        <div class="col-md-6 col-lg-6">     @include('partials.bs_text', ['name' => 'additional_no', 'label' => 'Additional Contact', 'extras' => 'required="required"', 'useOld' => $user->additional_no]) </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">   @include('partials.bs_textarea', ['name' => 'address', 'label' => 'Address', 'extras' => 'required="required"', 'useOld' => $user->address])</div>
                                        <div class="col-md-6 col-lg-6">  @include('partials.selectpicker', ['name' => 'role', 'label' => 'User Type', 'options' =>['Select One', 'admin', 'super', 'user'], 'useKeys' => 'true', 'extras' => 'required="required"'])</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">  @include('partials.bs_password', ['name' => 'password', 'label' => 'Password', 'extras' => 'required="required"', 'useOld' => $user->Password]) </div>
                                        <div class="col-md-6 col-lg-6">    @include('partials.bs_password', ['name' => 'password_confirmation', 'label' => 'Confirm Password', 'extras' => 'required="required"', 'useOld' => $user->Password])</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">   @include('partials.bs_text', ['name' => 'username', 'label' => 'Username', 'extras' => 'required="required"', 'useOld' => $user->username]) </div>
                                        <div class="col-md-6 col-lg-6"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-fill btn-info">Update User</button>
                                            <a href="{{ route('users.show' ,$user->id) }}"
                                               class="btn btn-fill btn-warning pull-right"><i
                                                        class="fa fa-arrow-left"></i> Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection