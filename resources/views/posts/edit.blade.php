@extends('main')

@section('title', '|Edit Blog Post')

@section('stylesheets')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.tiny.cloud/1/3tu1nilfbrqjjmz5rmc73yrt7nc0oczoun099uuc8czeo73g/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ 
      selector:'textarea',
      plugins: "link",
  toolbar: " undo redo |styleselect||bold italic strikethrough | alignleft aligncenter  alignright alignjustify| | outdent indent| |link image",
  link_context_toolbar: true,
      menubar: false
 });</script>

@endsection

@section('content')
<div class="row">
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
<div class="col-md-8">
{{form::label('title', 'Title:')}}
{{ Form::text('title', null, ["class" => 'form-control input-lg'])}}

{{form::label('slug', 'Custom Url:', ['class' => 'form-spacing-top'])}}
{{ Form::text('slug', null, ["class" => 'form-control'])}}

{{ Form::label('category_id', "Category:", ['class' => 'form-spacing-top']) }}
{{ Form::select('category_id', $categories, $post->category_id, ['class' => 'form-control'])}}

{{ Form::label('tags', "Tags:", ['class' => 'form-spacing-top']) }}
{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple'])}}

{{Form::label('feature_image', 'Update Featured Image:', ['class' => 'form-spacing-top'])}}
{{Form::file('featured_image')}}

{{form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
  {{ Form::textarea('body', null, ['class' => 'form-control'])}}
   </div>
   <div class="col-md-4">
   <div class="well">
   <dl class="dl-horizontal">
   <dt>Created At:</dt>
   <dd>{{ date('M j, Y H:i', strtotime($post->created_at))}}</dd>
   </dl>

   <dl class="dl-horizontal">
   <dt>Last Updated:</dt>
   <dd>{{ date('M j, Y H:i', strtotime($post->updated_at))}}</dd>
   </dl>
   <hr>
   <div class="row">
      <div class="col-sm-6">
      {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => "btn btn-danger btn-block"))!!}
      
      </div>
      <div class="col-sm-6">
      {{Form::submit('Save Changes', ['class' => "btn btn-success btn-block"])}}
     
      </div>
      </div>
   </div>
   {!! Form::close() !!}
   </div>
   
   

   </div>
   </div>
@stop

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script type="text/javascript"> 
    $('.select2-multi').select2();
    $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
</script>

@endsection
