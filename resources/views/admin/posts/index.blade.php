@extends('layouts.app')

@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="text-center">Published posts</h4>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
		        <thead>
			        <th>
				        Image
			        </th>
			        <th>
			        	Title
			        </th>
			        <th>
				        Edit
			        </th>
			        <th>      
						Delete
			        </th>
		        </thead>
		        <tbody>
		          @if($posts->count() > 0)
			        @foreach($posts as $post)
			        <tr>
				        <td>
					       <img src="{{ $post->featured }}" style="width:40px; height:40px;" alt="{{ $post->title }}">
				        </td>
				        <td>
				        	{{ $post->title }}
				        </td>
				        <td>
				        	<a href="{{ route('post.edit', ['id'=>$post->id])}}" class="btn btn-xs btn-info">
				        		Edit
				        	</a>
				        </td>
				        <td>
				        	<a href="{{ route('post.delete', ['id'=>$post->id ])}}" class="btn btn-xs btn-danger">
				        		Trash
				        	</a>
				        </td>
			        </tr>
			        @endforeach
			       @else
			       	<tr>
			       		<th colspan="4" class="text-center">
			       			No published posts yet.
			       		</th>
			       	</tr>
			       @endif
		        </tbody>
	        </table>
		</div>
	</div>

@endsection

