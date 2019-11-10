@extends('main')

@section('title', '| Homepage')
@section('content')
    <div class="row">
    <div class="col-md-12">
    <div class="jumbotron">
  <h1>Welcome to My Blog!</h1>
  <p class="lead"> Thank you so much for visting. This is a project to help my learn laravel. Hopefully you enjoy my posts</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Posts</a></p>
</div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-8">
        <div class="post">
        <h3>Post title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita eligendi, assumenda dignissimos ex amet! Corporis, quisquam impedit magni nulla dolores neque natus a eligendi numquam, harum molestias iure dolorem!...</p>
        <a href='#' class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
        <h3>Post title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita eligendi, assumenda dignissimos ex amet! Corporis, quisquam impedit magni nulla dolores neque natus a eligendi numquam, harum molestias iure dolorem!...</p>
        <a href='#' class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
        <h3>Post title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita eligendi, assumenda dignissimos ex amet! Corporis, quisquam impedit magni nulla dolores neque natus a eligendi numquam, harum molestias iure dolorem!...</p>
        <a href='#' class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
        <h3>Post title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita eligendi, assumenda dignissimos ex amet! Corporis, quisquam impedit magni nulla dolores neque natus a eligendi numquam, harum molestias iure dolorem!...</p>
        <a href='#' class="btn btn-primary">Read More</a>
        </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2> 
        </div>
    </div>
    @endsection
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>