

<div class="sidebar left ">
    <ul class="list-sidebar bg-defoult">
        <!--<li class="nav-header "> <span> <img alt="image" class="img-circle" src="http://placehold.it/150x150"> </span>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
            <li><a href="#">Regular link</a></li>
            <li class="disabled"><a href="#">Disabled link</a></li>
            <li><a href="#">Another link</a></li>
          </ul> -->
        </li>
        <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Categories </span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="" id="dashboard">
                <li class="active"><a href="#"><i class="fa fa-music" aria-hidden="true"></i>Rock<span class="badge badge-light pull-right">{{\App\Contents::where(['category' => 'rock'])->get()->count()}}</span></a></li>
                <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i>Folk<span class="badge badge-light pull-right">{{\App\Contents::where(['category' => 'folk'])->get()->count()}}</span></a></li>
            </ul>
        </li>
    </ul>
</div>