
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link " href="{{url('/Action_data')}}">Student List</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/ login/admin')}}">Logout</a>
      </li>
      
      
      
      
    </ul>
    
  </div>
</nav>
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('form') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                    <form action="{{url('store-action')}}" method="post">
                        
                        @csrf
                        @if(Session::has('msg'))
<p class="alert alert-success">{{Session::get('msg')}}</p>
@endif  

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->FullName }}" autocomplete="name" >

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password"value="{{ $data->Stu_id }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Choose_option') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="opt"  value="{{ $data->choose_option }}" required autocomplete="email">

                                <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                        <!-- <div class="row">
                                <div class="col-12" >
                                    <label class="form-label select-label " >Choose_option</label>
                
                                  <select class="select form-control" name="choose_option" >
                                  <option value="0">select</option>
                                    <option value="project">Project</option>
                                    <option value="thesis">thesis</option>
                               
                                  </select>
                                  
                
                                </div>
                            </div> -->


                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Supervisor') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> -->
                                <select class="select form-control" name="choose_option" >
                                  <option value="0">select</option>
                                    <option value="Dr. Muhammad Shahin Uddin">Dr. Muhammad Shahin Uddin</option>
                                    <option value="Dr. Sajjad Waheed">Dr. Sajjad Waheed</option>
                                    <option value="Dr. Monir Morshed">Dr. Monir Morshed</option>
                                    <option value="Dr. Md. Ahsan Habib (Tareq)">Dr. Md. Ahsan Habib (Tareq)</option>
                                    <option value="Mst. Nargis Akter">Mst. Nargis Akter</option>
                                    <option value="Dr. Md. Abir Hossain">Dr. Md. Abir Hossain</option>
                                    <option value="S. M. Shamim">S. M. Shamim</option>
                                    <option value="Md. Tanvir Rahman">Md. Tanvir Rahman</option>
                                    <option value="Bikash Kumar Paul">Bikash Kumar Paul</option>

                               
                                  </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"class="btn btn-primary">
                                    register</button>
                            </div>
                        </div>
                    </form>
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