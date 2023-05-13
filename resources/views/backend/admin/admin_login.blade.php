@extends('layouts.nav')

@section('main')
<div class="container">


    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card bg-info">
                <div class="card-header">
                    <div class="card-title">
                        Login
                    </div>

                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('error-msg'))
                    <p class="text-danger">{{Session::get('error-msg')}}</p>
                    @endif

                    <form action="{{url('admin-login')}}" method="POST">
                        <div class="form-outline mt-3">
                            @csrf
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Email">
                        </div>
                        <div class="form-outline mt-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary mt-4">Sign In</button>

                    </form>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection