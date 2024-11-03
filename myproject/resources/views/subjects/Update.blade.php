<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>
    <div class="container p-5">
    <form class="offset-4 col-md-4 offset-4" action="{{route('subject/update',$data->id)}}" method="POST">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Subject Name</label>
          <input type="text" value="{{$data->SubName}}" class="form-control" name="name" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
</body>
</html>