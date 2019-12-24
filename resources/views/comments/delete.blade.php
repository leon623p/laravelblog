@extends('main')

@section('title', '| DEETE COMMENT?')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">

    <h1> DELETE THIS COMMENT</h1>

    <P>

    <strong>Name:</strong> {{$comment->name}} <br>
    <strong>Email:</strong> {{$comment->email}} <br>
    <strong>Comment:</strong> {{$comment->comment }}
    </P>

    {{Form::open(['route' => ['comments.destory', $comment->id], 'method' => 'DELETE'])}}
    {{Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-lg btn-block btn-danger'])}}
    {{Form::close()}}
    </div>
</div>

@endsection