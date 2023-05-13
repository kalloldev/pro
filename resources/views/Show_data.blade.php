@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{url('/home')}}" class="btn btn-primary">Add Data</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Registration
                </div>

                <div class="card-body">
               
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FullName</th>
      <th scope="col">Id</th>
      <th scope="col">Choose_option</th>
    </tr>
  </thead>
  <tbody>
        @foreach($Show_data as $key=>$data)
         <tr>
          <td>{{$key+1}}</td>
          <td>{{$data->FullName}}</td>
          <td>{{$data->Stu_id}}</td>
          <td>{{$data->choose_option}}</td>

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
