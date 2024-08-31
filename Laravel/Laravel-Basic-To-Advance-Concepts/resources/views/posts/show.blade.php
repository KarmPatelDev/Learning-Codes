

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Post Control</title>
  <style>
    #outer{
        width:100%;
        text-align: center;
    }
    .inner{
        display: inline-block;
    }
    </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</head>
<body>

<div class="row">
    <div class="col-md-4 offset-3 mt-5">

    <h1 style="text-align:center">Posts</h1>

    @if ($post)
    
    <span><b>Title: </b> {{ $post->title }} </span> <br>
    <span><b>Description: </b> {{ $post->description }} </span> <br>
    <span><b>Publish: </b> {{ $post->is_publish == 1 ? 'Yes' : 'No' }} </span> <br>
    <span><b>Active: </b> {{ $post->is_active == 1 ? 'Yes' : 'No' }} </span> <br>

    @else
    <h4>Coming Soon</h4>
    @endif
    
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>