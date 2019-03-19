<!doctype html>
<html lang="en">
<head>
    <title>User Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class=" col-md-8">
            <table class="table table-bordered">
                <tr>
                    <td>
                        <div class="alert alert-success" role="alert">
                            <h1 style="text-align: center">  User Registration</h1>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="FirstName">First Name</label>
                                <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="Enter Your First Name">
                            </div>
                            <div class="form-group">
                                <label for="LastName">Last Name</label>
                                <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Enter Your Last Name">
                            </div>
                            <div class="form-group">
                                <label for="UserName">User Name</label>
                                <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Enter Your User Name">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="Dob">Date of Birth</label>
                                <input type="text" class="form-control" id="datepicker" name="Dob" placeholder="Choose Your Date of Birth">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter Your Password">
                            </div>
                            <div class="form-group">
                                <label for="ConfirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Enter Your Password Again">
                            </div>

                            <input type="submit" id="submit" class="btn btn-success" value="Create Account">
                            Already Have An Account <a  class="btn btn-light" href="{{route('login.index')}}"> click Here</a>
                            <a  class="btn btn-info float-right" href="{{route('home.index')}}"> <span class="fa fa-home"></span></a>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-4 empty-separator">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1970:2017'
        });
    });
</script>

</body>
</html>