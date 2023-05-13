<!-- <a href="{{url('/home')}}" class="btn btn-primary">Add Data</a> -->
@extends('layouts.nav')
@section('main')

<header id="header" class="bg-primary">
    <div class="container d-flex align-items-center justify-content-between">

        <h5><a href="https://ict.mbstu.ac.bd/"></a>Admin</h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo"><img src="{{url('frontend/assets/img/logo.png')}}" alt=""
                class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <!-- <li><a class="nav-link scrollto" href="/">Home</a></li> -->
                <li class="dropdown"><a href="#"><span>General Information</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/add-teacher">
                                Add_Teacher</a></li>
                        <li><a href="/teacher-list">Teacher_list
                            </a></li>
                        <li><a href="/Student_list">Assign_Teacher
                            </a></li>
                        <li><a href="/show-data">Assign_List</a>

                        </li>




                    </ul>
                </li>
                <!-- <li><a class="nav-link scrollto" href="#about">About</a></li> -->
                <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a href="blog.html">Blogwww</a></li> -->

                <!-- <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/login">Student Login</a></li>
                        <li><a href="login/admin">Admin Login</a></li>
                        <li><a href="/login/teacher">Teacher Login</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/">Logout</a></li>
                <li><a class="nav-link scrollto" href="/c">Contact</a></li> -->

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<div class="row justify-content-center mt-3">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                Teacher List
            </div>

            <div class="card-body">

                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>

                            <th scope="col">Password</th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($t2 as $key=>$data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->password}}</td>



                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
@endsection