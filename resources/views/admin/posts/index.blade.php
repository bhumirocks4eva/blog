@extends('layouts.app')

@section('content')
	
	<div class="panel panel-defailt">
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
		        </tbody>
	        </table>
		</div>
	</div>

@endsection

