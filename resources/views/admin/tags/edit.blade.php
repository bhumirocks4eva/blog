@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Edit <b>{{$tag->name}}</b>
		</div>
		<div class="panel-body">
			<form action="{{ route('tag.update',['id'=>$tag->id])}}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="tag">Tag</label>
					<input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Update the tag
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@endsection