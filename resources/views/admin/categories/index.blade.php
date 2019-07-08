@extends('layouts.app')

@section('content')
	
	<div class="panel panel-defailt">
		<div class="panel-body">
			<table class="table table-hover">
		        <thead>
			        <th>
				        Category name
			        </th>
			        <th>
				        Editing
			        </th>
			        <th>      
						Delete
			        </th>
		        </thead>
		        <tbody>
			        @foreach($categories as $category)
			        <tr>
				        <td>
					        {{ $category->name }}
				        </td>
				        <td>
				        	<a href="{{ route('category.edit', ['id'=>$category->id])}}" class="btn btn-xs btn-info">
				        		Edit
				        	</a>
				        </td>
				        <td>
				        	<a href="{{ route('category.delete', ['id'=>$category->id ])}}" class="btn btn-xs btn-danger">
				        		Delete
				        	</a>
				        </td>
			        </tr>
			        @endforeach
		        </tbody>
	        </table>
		</div>
	</div>

@endsection
