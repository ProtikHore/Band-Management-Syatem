<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Band</title>

    <link href="{{asset('css/tableStyle.css')}}" rel="stylesheet">
    <style>
      h3,h4,.dl
      {
        text-align: center;
      }
    </style>

  </head>

  <body>
    <h1>Delete</h1>

    <table class="container">
      <tr>
        <td>Band ID: </td>
        <td>{{$band->bandId}} </td>
      </tr>

      <tr>
        <td>Band Name: </td>
        <td>{{$band->bandName}} </td>
      </tr>

      <tr>
        <td>Band Type: </td>
        <td>{{$band->bandType}} </td>
      </tr>

      <tr>
        <td><h4>Click confirm for deleting Band:  <span style="font-size:30x; color:red">"{{$band->bandName}}"</span></h4></td>
        <td>
          <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="bandId" value="{{$band->bandId}}">
            <input type="submit" name="" value="Confirm" id="delete">
          </form>

        </td>
      </tr>


    </table>
      <h3>
        <a href="{{route('band.index')}}"  style="text-align:center; color:yellow; font-size:20px; margin-top:-10" >Back</a>

      </h3>  

    
    
      </body>
</html>
