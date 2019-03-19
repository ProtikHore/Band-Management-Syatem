<!doctype html>
<html lang="en">
<head>
    <title>User Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-9">
            <div class="row">
                @if(session()->has('sessioncheck'))

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Please Login To Access The Page
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                @endif
        </div>
    </div>
</div>
<div class="container ">


    <div style="margin-top: 150px!important" class="row">

        <div class="offset-md-2 col-md-8 ">
            <table class="table table-bordered">
                <tr>
                    <td>
                        <div class="alert alert-success" role="alert">
                            <h1 style="text-align: center">  User Portal</h1>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="UserName">UserName</label>
                                <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Enter UserName">

                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter Your Password">
                            </div>

                            <input type="submit" class="btn btn-success" value="Log In">
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><h4>Don't Have an Account </h4></div>
                                <div class="col-md-6">
                                    <a  class="btn btn-light" href="{{route('account.index')}}"> click Here</a>
                                    <a  class="btn btn-info float-right" href="{{route('home.index')}}"> <span class="fa fa-home"></span></a>
                                </div>
                            </div>

                        </form>

                </tr>
            </table>
            <div class="empty-separator"></div>
            @if(session()->has('message'))
                <div class="alert alert-danger"> {{session('message')}} For The User <span style="color: #155724"><strong>{{session('username')}}</strong></span></div>
                @endif
                </td>
        </div>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>