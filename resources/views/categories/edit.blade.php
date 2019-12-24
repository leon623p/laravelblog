@extends('main')

@section('title', "|Edit Category")

@section('content')

{{Form::model($category, ['route' => ['categories.update', $category->id], 'method' => "PUT"])}}
{{Form::label('name', 'Title:')}}
{{Form::text('name', null, ['class' => 'form-control'])}}
{{Form::submit('Save Changes', ['class' => 'btn btn-m-margin btn-success']) }}
{{Form::close()}}

@endsection