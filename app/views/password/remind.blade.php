@extends('layouts.scaffold')

@section('main')

@if (isset($error))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Uh-oh!</strong> {{$error}}
</div>
@endif

{{Form::open(['method' => 'POST', 'action' => 'RemindersController@postRemind', 'class' => 'form-horizontal', 'role' => 'form'])}}
<div class="form-group">
    <legend>Password Reminder</legend>
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
    <div class="col-sm-10 col-sm-offset-2">
        <button type="submit" class="btn btn-primary">Send Reminder</button>
    </div>
</div>
{{Form::close()}}

@stop