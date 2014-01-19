@extends('layouts.scaffold')

@section('main')

<div class="page-header clearfix">
    <h1>Posts</h1>
</div>

@if ($posts->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Body</th>
                <th colspan="3">Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td>{{{ $post->title }}}</td>
					<td>{{{ $post->body }}}</td>
					<td>{{ link_to_route('posts.show', 'View', array($post->id), array('class' => 'btn btn-success')) }}</td>
                    <td>{{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-warning')) }}</td>
                    <td>{{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id], 'role' => 'form']) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	<p>There are no posts</p>
@endif

@stop