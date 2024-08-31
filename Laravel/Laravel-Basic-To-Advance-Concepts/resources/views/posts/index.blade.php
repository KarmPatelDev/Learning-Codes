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
  <link rel="stylesheet" href="{{ asset('assets/toastr.min.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/toastr.min.js') }}"></script>

   <script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "60000",
        "extendedTimeOut": "60000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
  </script>

<!--
  <script>
    toastr.success("MESS");
  </script> -->

</head>
<body>

<div class="row">
    <div class="col-md-4 offset-3 mt-5">

    <h1 style="text-align:center">Posts</h1>

    @if (count($posts) > 0)
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Published</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>

        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ Str::limit($post->description, '15', '...') }}</td>
            <td><img src="{{ $post->galleryimage->name }}"/></td>
            <td>{{ $post->is_publish == 1 ? 'Yes' : 'No' }}</td>
            <td>{{ $post->is_active == 1 ? 'Yes' : 'No' }}</td>
            <td id="outer">
                <!-- <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success inner">View</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning inner">Edit</a>
                <form method="post" class="inner" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form> -->

                <!-- use slug -->
                <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-success inner">View</a>
                <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-warning inner">Edit</a>
                <form method="post" class="inner" action="{{ route('posts.destroy', $post->slug) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>

                @if($post->trashed())
                <a href="{{ route('posts.soft-delete', $post->id) }}" class="btn btn-warning inner">Undo</a>
                @endif
            </td>
        </tr>
        @endforeach
        
    </table>
    @else
    <h4>Coming Soon</h4>
    @endif


    <!-- {{ $posts->render() }} -->
    <!-- Smae as upper but used in latest version  -->
    {{ $posts->links() }}

    
    </div>
</div>


<script>

    @if (Session::has('alert-message'))
    toastr["info"]("{{ Session::get('alert-message') }}");
    @endif

    </script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>