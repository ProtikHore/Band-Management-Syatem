@extends('layout.admin')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Confirm Delete user <h2 style="color: red;">{{$delete->firstname}}</h2></h4>
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
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{$delete->firstname}}{{' '.$delete->lastname}}</td>

                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$delete->email}}</td>

                                    </tr>
                                    <tr>
                                        <th>Date Of Birth</th>
                                        <td>{{$delete->dob}}</td>

                                    </tr>
                                    <tr>
                                        <th>User Type</th>
                                        <td>{{$delete->usertype}}</td>

                                    </tr>
                                    <tr>
                                        <td><a class="btn btn-danger" href="{{route('admin.confirm',$delete->userid)}}">Confirm</a></td>
                                        <td><a class="btn btn-success"  href="{{route('admin.index')}}">Cancel</a></td>
                                    </tr>
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