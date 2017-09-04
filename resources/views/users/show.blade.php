@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="header">Basic Information</div>
                <div class="content">
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-xs-12">
                                @include('partials.bs_static', ['label' => 'Name', 'value' => $user->name])
                                @include('partials.bs_static', ['label' => 'Email', 'value' =>  $user->email])
                                @include('partials.bs_static', ['label' => 'Username', 'value' =>  $user->username])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <a href="{{ route('users.edit', $user->id) }}"
               class="btn btn-fill btn-info"><i class="fa fa-pencil"></i> Edit User Info</a>
            <a href="{{ route('users.index') }}"
               class="btn btn-fill btn-warning pull-right"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
@endsection

