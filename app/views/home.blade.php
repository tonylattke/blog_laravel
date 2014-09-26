@extends('base')

@section('principal_content')

@if (count($posts) > 0)
    @foreach($posts as $post)
    	<form method="post" id="form_delete_post" action="/post/delete"> </form>
	    <h1 id="{{$post->id}}">
            <a href="/post/{{$post->id}}">{{$post->name}}</a>
            <a class="btn" href="/post/{{$post->id}}/edit">Edit</a>
            <a class="btn btn-primary pull-right delete_post">X</a>
        </h1>
        <p>
            <span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}
        </p>

        {{ $post->text }}
        </br>
        </br>
        <a class="btn btn-primary" href="/post/{{$post->id}}">
        	Read More <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

        <hr>
	@endforeach
@else
    <p>No posts</p>
@endif

@stop