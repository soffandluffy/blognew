@extends('app')

@section('header')

	<title>Laravel &raquo; Article &raquo; All</title>

@endsection

@section('content')

	<a class="waves-effect waves-light btn right" href="{{url('article/add')}}">Add New</a>
	
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Content</th>
				<th>Author</th>
				<th>Created at</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($article as $key)
			<tr>
				<td>{{$key->title}}</td>
				<td>{{$key->contents}}</td>
				<td>{{$key->user_id}}</td>
				<td>{{$key->created_at}}</td>
				<td><a href="{{url('article/edit/'.$key->id)}}">Edit
				</a></td>
				<td><a href="{{url('article/delete/'.$key->id)}}" onclick="return confirm('Are you sure want to delete {{$key->title}}?')">Delete</a></td>
			</tr>
		@endforeach
		@if(sizeof($article)==0)
			<tr>
				<td colspan="6" class="center">
				<div>No Data</div>
				<div><a href="{{url('article/add')}}"
				class="waves-effect waves-light btn">Add New</a></div>
				</td>
			</tr>
		@endif
		</tbody>
	</table>

@endsection