<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Concert</title>
   
      <link href="{{asset('css/tableStyle.css')}}" rel="stylesheet">
  
  </head>

  <body>
    <h1><span class="blue"></span>Band Management<span class="blue"></span></h1>
    <h2><span class="yellow">All Concerts</span></h2>


      <table class="container">

      <thead>
        <tr>
          <th><h1>Band Name</h1></th>
          <th><h1>ConcertNo</h1></th>
          <th><h1>ConcertName</h1></th>
          <th><h1>ConcertDateTime</h1></th>
          <th><h1>ConcertVenue</h1></th>
          <th><h1>TicketQuantity</h1></th>
          <th><h1>PerTicketPrice</h1></th>
          <th><h1>Option</h1></th>
        </tr>
      </thead>


       <tbody>
         @foreach($lpConcert as $lpconcert)
        <tr>

          <td>{{$lpconcert->bandName}}</td>
          <td>{{$lpconcert->concertNo}}</td>
          <td>{{$lpconcert->concertName}}</td>
          <td>{{$lpconcert->concertDateTime}}</td>
          <td>{{$lpconcert->concertVenue}}</td>
          <td>{{$lpconcert->ticketQuantity}}</td>
          <td>{{$lpconcert->perTicketPrice}}</td>


            <td>  <a href = "{{route('concert.edit', $lpconcert->concertNo )}}">Edit</a> |
                  <a href="{{route('concert.delete', $lpconcert->concertNo )}}" style="color:red">Delete</a>
            </td>

        </tr>
        @endforeach

       </tbody>
      </table>


      <h2><a href="{{route('admin.index')}}" style="font-size:25px; text-position:center">Back</a></h2>
      <h2>{{session('message')}}</h2>

  </body>
</html>
