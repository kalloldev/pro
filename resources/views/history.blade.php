@extends('layouts.nav')
@section('main')

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="/work-up">work_update</a>
                    </li>
                    <!-- <li class="nav-item active">
        <a class="nav-link " href="{{url('/Action_data')}}">Logout</a>
      </li> -->



                </ul>

            </div>
        </nav>

        <!-- <a href="{{url('/home')}}" class="btn btn-primary">Add Data</a> -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update Information
                    </div>

                    <div class="card-body">

                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">update date</th>



                                    <th scope="col">work update</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($show1 as $key=>$data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data->updated_at}}</td>

                                    <td>{{$data->Work_update}}</td>


                                </tr>

                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>@endsection