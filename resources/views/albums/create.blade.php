@extends('layouts.app')

@section('content')
	<h3>Create Album</h3>
	<form method="POST" action="/albums/store" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<label for="name" class="small-3 columns">Name:</label>
			<div class="small-5 columns">
				<input type="text" name="name" placeholder="Album Name" class="right">
				
			</div>

		</div>
		<div class="row">
			Description:
			<textarea name="description" placeholder="Album Description"></textarea>
		</div>
		<div class="row">
			<input class="button" type="file" name="cover_image" value="Upload Image">
		</div>
		<div class="row">
			<input class="button" type="submit" value="Create">
		</div>
	</form>
@endsection