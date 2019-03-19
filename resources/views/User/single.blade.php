@extends('layout.master')

@section('title')
    User Uploaded Song Details
@endsection
@section('css')
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Player -->
    <link rel="stylesheet" href="{{asset('css/plyr.css')}}">

    <!-- Docs styles -->
    <link rel="stylesheet" href="{{asset('js/demo.css')}}">
    <!-- Svg -->
    <link rel="stylesheet" href="{{asset('css/plyr.svg')}}">
    <link rel="stylesheet" href="{{asset('js/demo.svg')}}">

    <!-- Preload -->
    <link rel="preload" as="font" crossorigin type="font/woff2" href="https://cdn.plyr.io/static/fonts/avenir-medium.woff2">
    <link rel="preload" as="font" crossorigin type="font/woff2" href="https://cdn.plyr.io/static/fonts/avenir-bold.woff2">
    <style>
        a{
            text-align: left;
            color:#A3A3A3!important
        }
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>
    @endsection
@section('maincontent')

   <div class="row">
       <div class="col-md-8">
           <section>

               <video poster="" controls crossorigin>
                   <!-- Video files -->
                   <source src="{{asset('uploads/file').'/'.$song->file}}" type="video/mp4">
                   <source src="{{asset('uploads/file').'/'.$song->file}}" type="video/webm">

                   <!-- Text track file -->
                   <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                          default>

                   <!-- Fallback for browsers that don't support the <video> element -->
                   <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" download>Download</a>
               </video>


           </section>
       </div>
       <div class="col-md-4">
           <table class="table table-hover table-dark">
               <tbody>
               <tr>
                   <th>Song Name</th>
                   <td style="text-align: left">{{$song->filename}}</td>

               </tr>
               <tr>
                   <th>Category</th>
                   <td>{{$song->category}}</td>

               </tr>
               <tr>
                   <th>Uploaded At</th>
                   <td>{{$song->upload_date}}</td>

               </tr>

               </tbody>
           </table>
       </div>
   </div>

    @endsection