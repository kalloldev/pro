@extends('layouts.nav')
@section('main')
<div class="container-fluid">


    <!-- <a href="{{url('/home')}}" class="btn btn-primary">Add Data</a> -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Work Update
                </div>

                <div class="card-body">

                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">Meeting_No </th>



                                <th scope="col">Meeting_title</th>
                                <th scope="col">Meeting_Description</th>
                                <th scope="col">Meeting_DateTime</th>
                                <th scope="col">UpMeeting_DateTime</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ow1 as $key=>$data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$data->Meeting_No }}</td>


                                <td>{{$data->Meeting_title}}</td>

                                <td>{{$data->Meeting_Description}}</td>

                                <td>{{$data->Meeting_DateTime}}</td>

                                <td>{{$data->UpMeeting_Date_Time}}</td>


                            </tr>

                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection