@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1>Edit Post: <small>{{$post->title}}</small></h1>
</div>

{{ Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->id], 'class' => 'form-horizontal', 'role' => 'form']) }}

<div class="form-group">
    <div class="col-sm-2">
        {{ Form::label('title', 'Title:') }}
    </div>
    <div class="col-sm-10">
        {{ Form::text('title', $post->title, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-2">
        {{ Form::label('body', 'Body:') }}
    </div>
    <div class="col-sm-10">
        {{ Form::textarea('body', $post->body, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
        {{ link_to_route('posts.index', 'Cancel', null, array('class' => 'btn btn-danger')) }}
    </div>
</div>

{{ Form::close() }}

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
