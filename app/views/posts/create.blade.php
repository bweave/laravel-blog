@extends('layouts.scaffold')

@section('main')

<h1>Create Post</h1>

{{ Form::open(['route' => 'posts.store', 'class' => 'form-horizontal', 'role' => 'form']) }}

<div class="form-group">
    <div class="col-sm-2">
        {{ Form::label('title', 'Title:') }}
    </div>
    <div class="col-sm-10">
        {{ Form::text('title') }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-2">
        {{ Form::label('body', 'Body:') }}
    </div>
    <div class="col-sm-10">
        {{ Form::textarea('body') }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    </div>
</div>
{{ Form::close() }}

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


