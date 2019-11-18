@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href=/css/parsley.css>
@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1>Create New Post</h1>
    <hr>
    {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
    {{Form::label('title', 'Title:')}}
    {{Form::text('title', null, array('class' => 'form-control', 'required' =>'', 'maxlength' => '255'))}}

    {{form::label('slug', 'Slug:')}}
    {{form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'))}}

    {{ Form::label('category_id', 'Category:') }}
    <select name="category_id" class="form-control">

    @foreach($categories as $category)
    <option value='{{$category->id}}'>{{$category->name}}</option>
    @endforeach

    </select>

    {{form::label('body', 'Post Body:')}}
    {{form::textarea('body', null, array('class' => 'form-control', 'required' => ''))}}


    {{form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

{!! Form::close() !!}

    </div>
</div>

@endsection

@section('scripts')
<script src="http://parsleyjs.org/dist/parsley.js"></script>
@endsection


