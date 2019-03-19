@extends('layout.admin')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Show All User</h4>
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin.index')}}">Dashboard</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="row row-in">
                            <div class="col-lg-12 col-sm-12">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Date Of Birth</th>
                                        <th>User Type</th>
                                        <th>Profile Image</th>
                                        <th>Total Uploaded Song</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($information as $user)
                                       <tr>

                                           <td>{{$user->userid}}</td>
                                           <td>{{$user->firstname}}</td>
                                           <td>{{$user->lastname}}</td>
                                           <td>{{$user->username}}</td>
                                           <td>{{$user->email}}</td>
                                           <td>{{$user->dob}}</td>
                                           <td>{{$user->usertype}}</td>
                                           <td><img style="width: 30px;height: 30px;" src="{{asset('uploads').'/'.$user->profileimage}}" alt=""></td>
                                           <td>{{\App\Contents::where(['userid' => $user->userid])->get()->count()}}</td>
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

    </div>

@endsection