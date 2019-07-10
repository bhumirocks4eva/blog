@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="text-center">Create a new Category</h4>
		</div>
		<div class="panel-body">
			<form action="{{ route('category.save')}}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Store the category
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
@endsection
