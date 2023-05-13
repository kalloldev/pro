<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/admin/dashboard">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item active">
            <a class="nav-link " href="/add-teacher">Add_Teacher</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="/teacher-list">Teacher_list</a>
          </li>
       
          <li class="nav-item active">

            <a class="nav-link " href="/Student_list">Assign_Teacher</a>
          </li>
          <li class="nav-item active">
                        <a class="nav-link " href="/show-data">Assign_List</a>
                    </li>


          <li class="nav-item active">
            <a class="nav-link " href="{{url('/login/admin')}}">Logout</a>
          </li>
        </ul>

      </div>
    </nav> -->
    <div class="row justify-content-center mt-3">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Assign Teacher
          </div>

          <div class="card-body">

            <table class="table table-hover">
              <thead>
              
              </thead>
              <tbody>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">StudentName</th>
                  <th scope="col">TeacherName</th>

                </tr>

                @foreach($at1 as $key=>$data)
                  <tr>
                  <td>{{$key+1}}</td>

                    <td>

                       @php

                        $Student=json_decode($data->StudentName)
                       @endphp
                       @foreach($Student as $StudentName)
                       
                       **{{$StudentName}}
                       @endforeach
                      
                      
                   
                      <!-- {{$data->StudentName}} -->

                      
                    
                    
                  
                  </td>
                  </td> 

                 
                  <td>{{$data->TeacherName}}</td>
                                                  



                  </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
    
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>
</body>

</html>