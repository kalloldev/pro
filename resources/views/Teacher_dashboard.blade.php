@extends('layouts.nav')
@section('main')
<div class="container-fluid">
    <!-- <a href="{{url('/home')}}" class="btn btn-primary">Add Data</a> -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/teacher/dashboard">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



    </nav> -->

</div>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card bg-info">
            <div class="card-header">
                Group Information
            </div>

            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>


                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <td>Group 1(Kallol and Nadon)</td>
                            <td></td>
                            <td><a class="btn btn-primary" href="/work-up" role="button">Group_DataUpdate</a></td>
                            <td><a class="btn btn-primary" href="/update_show" role="button">Group_Info</a></td>


                        </tr>
                        <!-- <tr>

                                    <td>Group 2</td>
                                    <td></td>
                                    <td><a class="btn btn-primary" href="/work-up" role="button">Work Update</a></td>
                                    
                                    <td><a class="btn btn-primary" href="#" role="button">Group_Info</a></td>

                                </tr> -->
                        <!-- <tr>
                              
                                <td>Group 3</td>
                                <td></td>
                                <td><a class="btn btn-primary" href="#" role="button">Work Update</a></td>
                                <td><a class="btn btn-primary" href="#" role="button">Group_Info</a></td>
                               

                              </tr> -->
                    </tbody>
                </table>
                <section>

                </section>
            </div>

        </div>
    </div>

</div>
@endsection