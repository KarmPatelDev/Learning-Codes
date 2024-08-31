<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Post Control</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</head>
<body>

<div class="row">
    <div class="col-md-4 offset-3 mt-5">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('login'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ Session::get('login') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 style="text-align:center">Edit Page</h1>

    <form method="post" action="{{ route('posts.update', $post->slug) }}" id="form">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" placeHolder="Enter The Title" value="{{ old('title', $post->title) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea type="text" class="form-control" name="description" placeHolder="Enter The Description">{{ old('description', $post->description) }}</textarea>
    </div>
    <div class="mb-3">
    <label class="form-label">Published</label>
        <select name="is_publish" class="form-control">
            <option value="" disabled selected>Choose Option:</option>
            <!-- Before laravel 9
            <option @if( old('is_publish') == 1 ) selected @endif value="1">Yes</option>
            <option @if( old('is_publish') == 2 ) selected @endif value="2">No</option> -->

            <option @selected(old('is_publish', $post->is_publish) == 1) value="1">Yes</option>
            <option @selected(old('is_publish', $post->is_publish) == 2) value="2">No</option>
        </select>
    </div>
    <div class="mb-3">
    <label class="form-label">Active</label>
        <select name="is_active" class="form-control">
            <option value="" disabled selected>Choose Option:</option>
            <!-- Before laravel 9
            <option @if( old('is_active') == 1 ) selected @endif value="1">Yes</option>
            <option @if( old('is_active') == 2 ) selected @endif value="2">No</option> -->

            <option @selected(old('is_active', $post->is_active) == 1) value="1">Yes</option>
            <option @selected(old('is_active', $post->is_active) == 2) value="2">No</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>

<!-- We can use route or url to use anchor tag -->
<!-- <a href="{{ url('/test2') }}" class="btn btn-primary">Go To test2</a> -->
<!--  we can pass variable in route use comma after the name -->
<!-- <a href="{{ route('test.1') }}" class="btn btn-primary">Go To test1</a> -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $('#form').parsley();
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>