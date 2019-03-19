@extends('layout.userLayout')
    @section('title')
        welcome {{$account->firstname}}
        @endsection


   @section('maincontent')
       <div class="alert alert-success">
           <h2 style="text-align: center">Welcome {{$account->firstname}}</h2>

       </div>
        <div class="row ">
            <div class="col-md-4">
                <li style="list-style: none"><img src="{{asset('uploads').'/'.$account->profileimage}}" class="img-thumbnail"></li>


            </div>
            <div  class="col-md-8">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{$account->firstname}}{{' '.$account->lastname}}</td>

                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$account->email}}</td>

                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td>{{$account->dob}}</td>

                    </tr>
                    <tr>
                        <th>User Type</th>
                        <td>{{$account->usertype}}</td>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
       @endsection