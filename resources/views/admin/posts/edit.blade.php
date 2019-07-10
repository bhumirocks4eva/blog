@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit <b>{{$post->title}}</b>
		</div>
		<div class="panel-body">
			<form action="{{ route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" value="{{$post->title}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="category">Select a Category</label>
					<select class="form-control" name="category_id">
						@foreach ($categories as $category)
							<option value=" {{ $category->id }} ">{{ $category->name }}</option>	
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" rows="5"	cols="5"  class="form-control">{{$post->content}}</textarea>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Update the post
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@endsection