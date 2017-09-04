@extends('layouts')

@section('content')
	<hr>
	<h1>Submit a POST!</h1>
	
<form method="POST" action="/posts">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="title">Title: </label>
		<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="enter text..">
	</div>
	<div class="form-group">
		<label for="body">Body: </label>
		<textarea id="body" name="body" class="form-control" placeholder="enter body.."></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Submit Post!</button>
</form>
	
@endsection