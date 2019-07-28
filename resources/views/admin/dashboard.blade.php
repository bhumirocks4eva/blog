@extends('layouts.app')

@section('content')
            <div class="col-lg-3">
            	<div class="panel panel-info">
            		<div class="panel-heading text-center">
            			Posted
            		</div>
            		<div class="panel-body text-center">
            			{{ $post_count}}
            		</div>
            	</div>
            </div>

            <div class="col-lg-3">
            	<div class="panel panel-danger">
            		<div class="panel-heading text-center">
            			Thrashed posts
            		</div>
            		<div class="panel-body text-center">
            			{{ $trashed_count}}
            		</div>
            	</div>
            </div>

            <div class="col-lg-3">
            	<div class="panel panel-success">
            		<div class="panel-heading text-center">
            			Users
            		</div>
            		<div class="panel-body text-center">
            			{{ $users_count }}
            		</div>
            	</div>
            </div>

            <div class="col-lg-3">
            	<div class="panel panel-info">
            		<div class="panel-heading text-center">
            			Categories
            		</div>
            		<div class="panel-body text-center">
            			{{ $categories_count}}
            		</div>
            	</div>
            </div>
@endsection
