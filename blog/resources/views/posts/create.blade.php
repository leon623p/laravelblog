@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href=/css/parsley.css>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.tiny.cloud/1/3tu1nilfbrqjjmz5rmc73yrt7nc0oczoun099uuc8czeo73g/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ 
      selector:'textarea',
      plugins: "link",
      toolbar: " undo redo |styleselect||bold italic strikethrough | alignleft aligncenter  alignright alignjustify| | outdent indent| |link image",
      menubar: false
 });</script>

 


@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1>Create New Post</h1>
    <hr>
    {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true]) !!}
    {{Form::label('title', 'Title:')}}
    {{Form::text('title', null, array('class' => 'form-control', 'required' =>'', 'maxlength' => '255'))}}

    {{form::label('slug', 'Custom Url:')}}
    {{form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'))}}

    {{ Form::label('category_id', 'Category:') }}
    <select name="category_id" class="form-control">

    @foreach($categories as $category)
    <option value='{{$category->id}}'>{{$category->name}}</option>
    @endforeach

    </select>

    {{ Form::label('tags', 'Tags:') }}
    <select name="tags[]" class="form-control select2-multi" multiple="multiple">

    @foreach($tags as $tag)
    <option value='{{$tag->id}}'>{{$tag->name}}</option>
    @endforeach

    </select>

{{Form::label('feature_image', 'Upload Featured Image:')}}
{{Form::file('featured_image') }}

    {{form::label('body', 'Post Body:')}}
    {{form::textarea('body', null, array('class' => 'form-control'))}}


    {{form::submit('Create Post', array('class' => 'btn btn-sm-margin btn-success btn-lg btn-block'))}}

{!! Form::close() !!}

    </div>
</div>

@endsection

@section('scripts')
<script src="http://parsleyjs.org/dist/parsley.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script type="text/javascript"> 
    $('.select2-multi').select2();
</script>
@endsection


