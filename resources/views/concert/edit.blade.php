<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Concert Edit</title>

    <link href="{{asset('css/tableStyle.css')}}" rel="stylesheet">
  </head>

  <body>
    <h1>Edit Concert Details</h1>

    <form method="post">
      {{csrf_field()}}
      <input type="hidden" name="concertNo" value="{{$concertNo->concertNo}}">
      <input type="hidden" name="bandName" value="{{$concertNo->bandName}}">

      <table style="margin:auto" class = "container">
        <tbody>

          <tr>
          <td>Band Name: </td>
          <td>{{$concertNo->bandName}} </td>
        </tr>


        <tr>
          <td>Concert NO: </td>
          <td> {{$concertNo->concertNo}} </td>
        </tr>

        <tr>
          <label id="cn"><td>Concert Name: </td></label>
          <td><input type="text" name="concertName" value="{{$concertNo->concertName}}"></td>
        </tr>

        <tr>
          <td>Concert DateTime: </td>
          <td>{{$concertNo->concertDateTime}}</td>
        </tr>


        <tr>
          <td>Concert Venue: </td>
          <td><input type="text" name="concertVenue" value="{{$concertNo->concertVenue}}"></td>
        </tr>


        <tr>
          <td>Ticket Quantity: </td>
          <td><input type="text" name="ticketQuantity" value="{{$concertNo->ticketQuantity}}"></td>
        </tr>


        <tr>
          <td>PerTicketPrice: </td>
          <td><input type="text" name="perTicketPrice" value="{{$concertNo->perTicketPrice}}"></td>
        </tr>
          

        <tr><td></td><td><input type="submit" value="Update"></td></tr>
        <tr><td></td><td><h3><a href="{{route('band.lpconcert')}}" style = "color:navy">Back</a></h3></td></tr>
        </tbody>
        
    </table>
    </form>
    

          
        
    
    
    <h3><label>

      @if($errors->any())
        @foreach($errors->all() as $errs)
          <p style="color:Red;"> {{$errs}}</p>
        @endforeach
      @endif

    </label>
</h3>

  </body>
</html>
