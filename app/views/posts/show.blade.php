@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1>{{$post->title}} <small>{{$post->created_at->toFormattedDateString()}}</small></h1>
</div>

<div class="post-body">
    {{$post->body}}
</div>

@stop
