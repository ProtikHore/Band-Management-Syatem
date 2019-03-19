@extends('layout.master')
@section('title')
    Online Band Management System
    @endsection

@section('maincontent')

    <div class=" row" >
        @foreach($song as $content)

            <div class="col-md-3" style="padding-bottom: 30px;border: 1px solid #efefef">
                <a href="{{route('file.showsong',$content->fileid)}}"> <img src="/uploads/file/{{$content->filepicture}}" alt="" class="img-thumbnail"style="height: 257px !important;"></a>
                <div class="description">
                    <span class="pull-left">Author Name :</span><a class="pull-left" href="#">{{$content->username}}</a>
                    <span style="padding-left: 30px">Category Name :</span> <a class="pull-right" href="#">{{$content->category}}</a>
                    <hr>
                    <div class="title">
                        <p><a style="color: #000;padding-bottom: 10px" href="{{route('file.showsong',$content->fileid)}}">{{$content->filename}}</a></p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection