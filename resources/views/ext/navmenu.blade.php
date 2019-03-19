<style>
    .nav-link{
        color: #A3A3A3!important;
    }
    .navbar-brand,span.fa.fa-bars{
        color: #fff !important;
    }


</style>

<!-- Nav Menu start -->
@if(session()->has('updatemessage'))
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Your Profile Successfully updated
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
@if(session()->has('videoupload'))
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    File Successfully Uploaded
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container-fluid">

    <nav class="navmenu navbar navbar-expand-lg navbar-light bg-light" style="background-color: #000 !important;">
        <a class="navbar-brand" href="#">BANDMANAGEMENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"aria-hidden="true" ></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" >

                <li class="nav-item ">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home.index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('band.purchase')}}">Ticket Booking</a>
                </li>

                @if(session()->has('loggedUser'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('file.index')}}">Uploads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('file.show',session()->get('loggedUser')->userid)}}">Uploaded Songs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;">
                            <img src="/uploads/{{session()->get('loggedUser')->profileimage}}" style="width:32px; height:32px; position:absolute; top:2px; left:10px; border-radius:50%">
                            {{session()->get('loggedUser')->username}}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{route('account.show', session()->get('loggedUser')->userid)}}">view Profile</a>
                            <a class="dropdown-item" href="{{route('account.edit',session()->get('loggedUser')->userid)}}">update Profile</a>

                            <a class="dropdown-item" href="{{route('login.destroy')}}">Logout</a>

                        </div>
                    </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login.index')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('account.index')}}">Register</a>
                    </li>

                @endif
            </ul>
        </div>
    </nav>

</div>