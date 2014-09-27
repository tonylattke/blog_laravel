@extends('base')

@section('principal_content')

<h1>Create Post</h1>

@if($errors->has())
    <h5>Erros:</h5>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="well">
    <form action="{{ action('post_create') }}" method="post" id="form_new_post" role="form">
        <input type="hidden" name="token" value="{{ $token }}">
        <h4>Name:</h4>
        <div class="form-group">
            <textarea name="name" id="post_name" class="form-control" rows="1" autofocus="autofocus"></textarea>
        </div>
        <h4>Text:</h4>
        <div class="form-group">
            <textarea name="text" id="post_text" class="form-control"></textarea>
        </div>
        
        <div id="create_post" class="btn btn-primary">Create Post</div>
    </form>
</div>

@stop