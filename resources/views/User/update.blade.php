@extends('layout.userLayout')

@section('title')
    Update User
@endsection
@section('maincontent')
    <div class="container table-bordered" >
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <div class="alert alert-success"style="position:relative;right: 14%;">
                    <h3 style="text-align: center">Personal info</h3>
                </div>
            </div>
        </div>
        <div class="row">


            <!-- edit form column -->
            <div class="offset-md-3 col-md-9 personal-info">



                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="FirstName" type="text" value="{{$account->firstname}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="LastName" type="text" value="{{$account->lastname}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Date Of Birth</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="Dob" type="text" value="{{$account->dob}}" id="datepicker" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Profile Image:</label>
                        <div class="col-md-8">
                            <input type="file" name="ProfileImage" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control"name="Email" type="text" value="{{$account->email}}" disabled data-toggle="tooltip" data-placement="top" title="Email Not be Editable" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="UserName" type="text" value="{{$account->username}}" disabled data-toggle="tooltip" data-placement="top" title="UserName Not be Editable">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <a class="btn btn-info" href="{{route('home.index')}}">Back To Home</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
@endsection
