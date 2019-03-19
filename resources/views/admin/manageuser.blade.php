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
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>User Type</th>
                                        <th>Total Uploaded Song</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($information as $user)
                                        <tr>

                                            <td>{{$user->userid}}</td>
                                            <td>{{$user->firstname}}{{' '. $user->lastname }}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->usertype}}</td>
                                            <td>{{\App\Contents::where(['userid' => $user->userid])->get()->count()}}</td>
                                            <td>
                                                <a href="" ><i style="color: #28A745;font-size: 30px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{route('admin.delete',$user->userid)}}"><i style="color: red;font-size: 30px" class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </td>
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