@extends('layout.admin')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Band Management</h4>
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
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center">
                                    <h5 class="text-danger">Registered User</h5>
                                    <h3 class="counter">{{\App\accounts::count()}}</h3>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">

                                <div class="col-in text-center b-r-none">
                                    <h5 class="text-muted text-warning">Total Admin</h5>
                                    <h3 class="counter">{{\App\accounts::where(['usertype' => 'admin'])->get()->count()}}</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center b-r-none">
                                    <h5 class="text-muted text-warning">Total Uploaded Sontg</h5>
                                    <h3 class="counter">{{\App\Contents::count()}}</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center b-r-none">
                                    <h5 class="text-muted text-warning">Total Video</h5>
                                    <h3 class="counter">{{\App\Contents::where(['filetype' => 'video'])->get()->count()}}</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="col-in text-center b-r-none">
                                    <h5 class="text-muted text-warning">Total Audio</h5>
                                    <h3 class="counter">{{\App\Contents::where(['filetype' => 'audio'])->get()->count()}}</h3>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection