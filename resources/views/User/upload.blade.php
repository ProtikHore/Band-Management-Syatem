@extends('layout.userLayout')

@section('title')
    Upload Video
    @endsection
@section('maincontent')
    <div class="container">
        <div class="videoupload col-md-9">
            <form method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="FileName" class="col-sm-2 col-form-label">File Name</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="FileName" name="FileName" placeholder="Enter File Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="FileType" class="col-sm-2 col-form-label">File Type</label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-control" name="FileType"
                        >
                            <option>Choose File Type</option>
                            <option>Audio</option>
                            <option>Video</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="FileCategory" class="col-sm-2 col-form-label">File Category</label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-control" name="FileCategory"
                        >
                            <option>Choose File Category</option>
                            <option>Rock</option>
                            <option>Folk</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="UploadFile" class="col-sm-2 col-form-label">Upload File</label>
                    <div class="col-sm-10">
                        <input type="file"  class="form-control" id="UploadFile" name="UploadFile"accept="video/*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Thumbnail" class="col-sm-2 col-form-label">Thumbnail(Poster)</label>
                    <div class="col-sm-10">
                        <input type="file"  class="form-control" id="Thumbnail" name="Thumbnail">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Upload Songs" style="float: right;position:relative;top: 40px;">
                </div>

            </form>
        </div>
    </div>
    @endsection