@extends('base')

@section('principal_content')

@if($errors->has())
    <h5>Erros:</h5>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="post" id="form_delete_post" action="/post/delete"> </form>
<h1 id="{{$post->id}}">
    <a href="/post/{{$post->id}}">{{$post->name}}</a>
    <a class="btn" href="/post/{{$post->id}}/edit">Edit</a>
    <a class="btn btn-primary pull-right delete_post">X</a>
</h1>
<p>
    <span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}
</p>

<p>{{ $post->text }}</p>

</hr>

<!-- the comment box -->
<div class="well">
    <form role="form" method="post" action="/post/make_comment">
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="id" value="{{ $post->id }}">
        <h4>Name:</h4>
        <div class="form-group">
            <textarea name="name" class="form-control" rows="1"></textarea>
        </div>
        <h4>Leave a Comment:</h4>
        <div class="form-group">
            <textarea name="text" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</hr>

<!-- the comments -->
@if (count($comments) > 0)
    @foreach($comments as $comment)
        <h3> {{ $comment->name }}
            <small> {{ $comment->date }} </small>
        </h3>
        {{ $comment->text }}
    @endforeach
@else
    <p>No comments</p>
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