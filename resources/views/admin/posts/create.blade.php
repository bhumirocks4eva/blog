@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="text-center">Create a new post</h4>
		</div>
		<div class="panel-body">
			<form action="{{ route('post.save')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">
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
					<label for="tags">Select tags</label>
					@foreach ($tags as $tag)
					<div class="checkbox">
						<label><input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->tag}}</label>
					</div>
					@endforeach
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea id="content" name="content" rows="5"	cols="5" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Store the post
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
@endsection

@section('styles')
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
  		$('#content').summernote();
		});
	</script>
@endsection
