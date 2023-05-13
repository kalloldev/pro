@extends('layouts.nav')

@section('main')


<!-- <a class="btn btn-link" href="show-data">
                                        show data?
                                    </a> -->

<div class="container">
    @if(Session::has('msg'))
    <p class="alert alert-success">{{Session::get('msg')}}</p>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-info ">
                <div class="card-header">
                    Registration
                </div>

                <div class="card-body">
                    <!-- @if(Session::has('msg'))
                    <p class="alert alert-success">{{Session::get('msg')}}</p>
                    @endif  -->
                    <form action="{{url('store-data')}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">FullName</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                                required>

                        </div>
                        <div class="mb-3">
                            <label for="id1" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id1" name="password" required>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <label class="form-label select-label ">Choose_option</label>

                                <select class="select form-control" name="choose_option">
                                    <option value="0">select</option>
                                    <option value="project">Project</option>
                                    <option value="thesis">thesis</option>

                                </select>


                            </div>
                        </div>



                        <div class="row mt-2">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>

                            </div>

                    </form>

                </div>




            </div>
        </div>
    </div>
</div>
</div>
@endsection