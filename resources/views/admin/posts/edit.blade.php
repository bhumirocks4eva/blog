@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="text-center">Edit <mark>{{$post->title}}</mark></h4>
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
							<option value=" {{ $category->id }} "
								@if($post->category->id == $category->id)
									selected
								@endif
								>{{ $category->name }}</option>	
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
						<label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
							@foreach($post->tags as $t)
							@if($t->id == $tag->id)
								checked
							@endif
							@endforeach
							>{{$tag->tag}}</label>
					</div>
					@endforeach
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