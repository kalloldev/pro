@extends('layouts.nav')
@section('main')
<div class="container-fluid">



    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card bg-info">
                <div class="card-header">
                    Info_Update_form

                </div>

                <div class="card-body">

                    <form action="{{url('work-list')}}" method="post">
                        @csrf


                        <div class="mb-3">
                            <label for="name" class="form-label">Meeting No</label>
                            <input type="text" class="form-control" name="NO" id="NO" required>

                        </div>
                        <div class="mb-3">
                            <label for="id1" class="form-label">Meeting title </label>
                            <input type="text" class="form-control" id="TIL" name="TIL" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Meeting Description</label>
                            <textarea class="form-control" id="text" rows="3" name="text" required></textarea>
                        </div>
                        <!-- <div class="mb-3">
                                    <label for="id1" class="form-label">Meeting Time</label>
                                    <input type="text" class="form-control" id="id1" name="password" required>
                                </div> -->
                        <div class="mb-3">
                            <label for="id2" class="form-label">Meeting Date & Time</label>
                            <input type="datetime-local" class="form-control" id="DAT" name="DAT" required>
                        </div>
                        <div class="mb-3">
                            <label for="id3" class="form-label">UpMeeting Date & Time </label>
                            <input type="datetime-local" class="form-control" id="UP" name="UP" required>
                        </div>



                        <div class="row mt-2">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>

                            </div>
                        </div>



                    </form>

                </div>

            </div>
        </div>

    </div>
</div>
@endsection