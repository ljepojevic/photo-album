@extends('layouts.app')

@section('content')
	<h3>Albums</h3>
<div class="row">
	@foreach($albums as $album)
		<div class="">
			<img class="thumbnail" src="/storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}" />
			<div class="row">
				<a href="/albums/{{ $album->id }}">{{ $album->name }}</a>
			</div>
		</div>
	@endforeach
</div>

@endsection

