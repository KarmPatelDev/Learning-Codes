<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    *{
    margin: 0;
    padding: 0;
    }
    ::-webkit-scrollbar{
        width: 5px;
    }
    ::-webkit-scrollbar-track{
        background: #13254c;
    }
    ::-webkit-scrollbar-thumb{
        background: #061128;
    }
    body{
        background: #05113b;
    }
  </style>
</head>
<body>
    <div class="w-100 p-3 text-center">
    <div class="container-fluid p-2 d-flex">

        <div class="pl-2" style="width: 40px;height:50px;font-size: 180%;">
          <i class="fa fa-angle-double-left text-white mt-2"></i>
        </div>

        <div style="width:60px;height:60px;">
          <img src="https://static.vecteezy.com/system/resources/previews/002/002/403/original/man-with-beard-avatar-character-isolated-icon-free-vector.jpg" width="100%" height="100%" style="border-radius:50px;" />
        </div>

        <div class="text-white font-weight-bold p-3 mt-0">Chatbot</div>

        <div style="background:#061128;height:2px;"></div>

    </div>

    <div id="content-box" class="container-fluid p-2" style="height: calc(100vh - 170px);overflow-y:scroll;"></div>

    <div class="container-fluid w-100 px-3 py-2 d-flex my-2" style="background:#131f45;height:62px;">

        <div class="mr-2 pl-2" style="background:#ffffff1c;width:calc(100% - 45px);border-radius:5px;">
            <input type="text" id="input" class="text-white p-2" name="input" style="background:none;width:100%;height:100%;border:0;outline:none;" />
        </div>

        <div id="button-submit" class="text-center" style="background:#4acfee;height:100%;width:50px;border-radius:5px;margin-left:5px;">
            <i class="fa fa-paper-plane text-white" aria-hidden="true" style="line-height:45px;"></i>
        </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#button-submit").on('click', function(){
            
            $value = $('#input').val();
            $('#content-box').append(`
            <div class="mb-2">
            <div class="float-right px-3 py-2" style="width:270px;background:#4acfee;border-radius:10px;float:right;font-size:85%;">` + $value + `</div>
            <div style="clear: both;"></div>
            </div>
           `);

           $.ajax({
            type: 'post',
            url: '{{ url('send') }}',
            data: {
                'input': $value
            },
            success: function(data){
                $('#content-box').append(`<div class="d-flex mb-2">
                <div class="mr-2" style="width:45px;height:45px;">
                    <img src="https://static.vecteezy.com/system/resources/previews/002/002/403/original/man-with-beard-avatar-character-isolated-icon-free-vector.jpg" width="100%" height="100%" style="border-radius:50px;" />
                </div>
                <div class="text-white px-3 py-2" style="width:270px;background:#13254b;border-radius:10px;font-size:85%;">` + data + `</div>
                </div>`);
                $value = $('#input').val('');
            }
           });

           
           
        });
    </script>

</body>
</html>