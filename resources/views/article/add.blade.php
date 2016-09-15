@extends('app')

@section('header')

	<title>Laravel &raquo; Article &raquo; Add</title>

@endsection

@section('content')

	<div class="row">
		<form class="col s12" method="POST" action="{{url('article/save')}}">
			<div class="input-field col s12">
				<input id="title" type="text" name="title" class="validate">
				<label>Title</label>
			</div>
			<div class="input-field col s12">
				<textarea id="contents" type="text" class="materialize-textarea" name="contents"></textarea>
				<label for="contents">Content</label>
			</div>
			<div class="right">
				<button type="submit" class="btn">Save</button>
			</div>
			<input type="Hidden" name="_token" value="{{csrf_token()}}">
			
		</form>
	</div>

@endsection