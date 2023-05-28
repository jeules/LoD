@extends('layouts.app')
@section('content')
	<div class="container">
		<ul class="list-group">
			@foreach ($versions as $version)
					<li class="list-group-item">
					 <a href="{{ route('champions', ['version' => $version]); }}">{{ $version }}</a>
					</li>
			@endforeach
		</ul>
	</div>
@endsection