<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Concert</title>

    <link href="{{asset('css/tableStyle.css')}}" rel="stylesheet">
  </head>

  <body>
    <h1>Delete</h1>

    <table class = "container">

      <tr>
        <td>Band Name: </td>
        <td>{{$cons->bandName}} </td>
      </tr>

      <tr>
        <td>Concert No: </td>
        <td>{{$cons->concertNo}} </td>
      </tr>

      <tr>
        <td>Concert Name: </td>
        <td>{{$cons->concertName}} </td>
      </tr>

      <tr>
        <td>Concert DateTime: </td>
        <td>{{$cons->concertDateTime}} </td>
      </tr>

      <tr>
        <td>Concert Venue: </td>
        <td>{{$cons->concertVenue}} </td>
      </tr>

      <tr>
        <td>Ticket Quantity: </td>
        <td>{{$cons->ticketQuantity}} </td>
      </tr>

      <tr>
        <td>Per Ticket Price: </td>
        <td>{{$cons->perTicketPrice}} </td>
      </tr>

      <tr>
        <td><h4>Click confirm for deleting concert:  <span style="font-size:30x; color:red">"{{$cons->concertName}}"</span></h4></td>
        <td>
          <form method="post"  style="text-align:center">
            {{csrf_field()}}
            <input type="hidden" name="consNo" value="{{$cons->concertNo}}">
            <input type="submit" name="" value="Confirm" id="delete">
          </form>
        </td>
      </tr>

      <tr>
        <td>
        </td>
      <td>
        <h3><a href="{{route('band.lpconcert')}}" style = "color:navy">Back</a></h3>
    </td>
  </tr>
    </table>
    

    
    <br>
    
  </body>
</html>
