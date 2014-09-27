@extends('base')

@section('principal_content')

@if (count($posts) > 0)
    <form method="post" id="form_delete_post" action="/post/delete"> </form>
    @foreach($posts as $post)
        <h1 id="{{$post->id}}">
            <a href="/post/{{$post->id}}">{{$post->name}}</a>
            <a class="btn" href="/post/{{$post->id}}/edit">Edit</a>
            <a class="btn btn-primary pull-right delete_post">X</a>
        </h1>
        <p>
            <span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}
        </p>

        <p>{{ $post->text }}</p>
        
        <a class="btn btn-primary" href="/post/{{$post->id}}">
            Read More <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

        <hr>
    @endforeach
@else
    <p>No posts</p>
@endif

@stop

@section('content_special')
<!-- list of years -->
<div class="well">
    <h4>Last posts</h4>
    <ul class="list-unstyled">
        @foreach($years as $year)
            <li>
                <a href="/year/{{ $year }}">{{ $year }}</a>
            </li>
        @endforeach   
    </ul>
</div>
<!-- list of years -->
@stop