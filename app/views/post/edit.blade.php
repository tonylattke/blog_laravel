@extends('base')

@section('principal_content')

<h1>Edit Post</h1>

@if($errors->has())
    <h5>Erros:</h5>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="well">
    <form action="{{ action('post_update') }}" method="post" id="form_modify_post" role="form">
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="id" value="{{ $post->id }}">
        <h4>Name:</h4>
        <div class="form-group">
            <textarea name="name" id="post_name" class="form-control" rows="1" autofocus="autofocus">{{ $post->name }}</textarea>
        </div>
        <h4>Text:</h4>
        <div class="form-group">
            <textarea name="text" id="post_text" class="form-control">{{ $post->text }}</textarea>
        </div>
        
        <div id="modify_post" class="btn btn-primary">Edit Post</div>
    </form>
</div>

@stop