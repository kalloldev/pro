@extends('layouts.nav')

@section('main')

<body>
    <div class="container-fluid">
        <!-- <a href="{{url('/home')}}" class="btn btn-primary">Add Data</a> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
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
        </nav>
        <section>

        </section>






    </div>
    @endsection