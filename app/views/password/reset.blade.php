@extends('layouts.scaffold')

@section('main')

@if (isset($error))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Uh-oh!</strong> {{$error}}
</div>
@endif

{{Form::open(['method' => 'POST', 'action' => 'RemindersController@postReset', 'class' => 'form-horizontal', 'role' => 'form'])}}
    <div class="form-group">
        <legend>Password Reset</legend>
    </div>

    <div class="form-group">
        <div class="col-sm-2">
            <label for="email">Your Email Address</label>
        </div>
        <div class="col-sm-10">
            <input type="email" name="email">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2">
            <label for="password">Password</label>
        </div>
        <div class="col-sm-10">
            <input type="password" name="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-2">
            <label for="password_confirmation">Confirm Password</label>
        </div>
        <div class="col-sm-10">
            <input type="password" name="password_confirmation">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input class="btn btn-primary" type="submit" value="Reset Password">
        </div>
    </div>

    <input type="hidden" name="token" value="{{ $token }}">
{{Form::close()}}

@stop