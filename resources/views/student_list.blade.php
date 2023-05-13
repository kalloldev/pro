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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/admin/dashboard">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
        <a class="nav-link " href="{{url('/login/admin')}}">Logout</a>
      </li> -->
                    <li class="nav-item active">
                        <a class="nav-link " href="/add-teacher">Add_Teacher</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="/teacher-list">Teacher_list</a>
                    </li>
                    <!-- <li class="nav-item active">
        <a class="nav-link " href="{{url('/Action_data')}}">Logout</a>
      </li> -->
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
        </nav>

        <form action="{{url('/SlectedStudent')}}" method="post">
            @csrf
        <div class="row mb-0">
                            <div >
                                <button type="submit"class="btn btn-primary">
                                    register</button>
                            </div>
                        </div>

            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Student list
                        </div>

                        <div class="card-body">

                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                            
                                        <th scope="col">Name</th>
                                        <th scope="col">choose_option</th>

                                        <!-- <th scope="col">Password</th> -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student_list as $key=>$data)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <!-- <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                            </div>
                                        </td> -->
                                        
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{$data->FullName}} " name="name[]"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                              
                                                </label>
                                                {{$data->FullName}}  
                                            </div>
                                         
                                                
                                        </td>
                                        <td>{{$data->choose_option}}</td>

                                        <!-- <td>{{$data->password}}</td> -->



                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>


                        </div>

                    </div>
                </div>







                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Teacher List
                        </div>

                        <div class="card-body">

                            <table class="table table-hover ">
                                <thead>
                                    <tr>


                                        
                                        <th scope="col">Name</th>

                                        <!-- <th scope="col">Password</th> -->
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teachername" value="Md. Tanvir Rahman"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                Md. Tanvir Rahman

                                                </label>
                                            </div>
                                        </td>
                                
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=" Dr. Muhammad Shahin Uddin"
                                                    id="flexCheckDefault" name="teachername">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                Dr. Muhammad Shahin Uddin
                                                </label>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Dr. Sajjad Waheed"
                                                name="teachername" id="flexCheckDefault" >
                                                <label class="form-check-label" for="flexCheckDefault">

                                                Dr. Sajjad Waheed
                                                </label>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Dr. Monir Morshed"
                                                    id="flexCheckDefault" name="teachername">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                Dr. Monir Morshed
                                                </label>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="    Dr. Md. Ahsan Habib (Tareq)"
                                                    id="flexCheckDefault" name="teachername">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                Dr. Md. Ahsan Habib (Tareq)
                                                </label>
                                            </div>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Mst. Nargis Akter"
                                                    id="flexCheckDefault" name="teachername">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                Mst. Nargis Akter
                                                </label>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="  Dr. Md. Abir Hossain"
                                                    id="flexCheckDefault" name="teachername">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                Dr. Md. Abir Hossain
                                                </label>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="  S. M. Shamim"
                                                    id="flexCheckDefault" name="teachername">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                S. M. Shamim
                                                </label>
                                            </div>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=" Bikash Kumar Paul"
                                                    id="flexCheckDefault" name="teachername">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                Bikash Kumar Paul
                                                </label>
                                            </div>
                                        </td>
                                        
                                    </tr>





                                </tbody>
                            </table>
                        </div>

                    </div>
                   

        </form>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</body>

</html>