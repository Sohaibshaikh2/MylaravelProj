<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    <div class="container">
        <a href="{{route('teacher.inserts')}}" class="btn btn-primary">Add</a>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Teacher Id</th>
                        <th scope="col">Teahcer Name</th>
                        <th>View</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                      @foreach ($teachdata as  $data)

                      <tr class="">
                       <td>{{$data->Teacher_Id}}</td> 
                       <td>{{$data->techer_name}}</td>
                       <td><a href="{{route('teacher.edit',$data->Teacher_Id)}}" class="btn btn-primary">Update</a></td>
                       <td><a href="{{route('teacher.delete',$data->Teacher_Id)}}" class="btn btn-danger">Delete</a></td>

                       </tr>

                      @endforeach  
                  
                 
                </tbody>
            </table>
        </div>
        
    </div>

</body>
</html>