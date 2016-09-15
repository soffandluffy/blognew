@extends('app')

@section('header')

	<title>Laravel &raquo; Article &raquo; Add</title>

@endsection

@section('content')

	<div class="row">
		<form class="col s12" method="POST" action="{{url('article/update')}}">
			<div class="input-field col s12">
				<input id="title" type="text" name="title" class="validate" value="{{$article->title}}">
				<label for="title">Title</label>
			</div>
			<div class="input-field col s12">
				<textarea id="contents" type="text" class="materialize-textarea" name="contents">{{$article->contents}}</textarea>
				<label for="contents">Content</label>
			</div>
			<div class="right">
				<button type="submit" class="btn">Save</button>
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<input type="hidden" name="id" value="{{$article->id}}">
		</form>
	</div>

@endsection