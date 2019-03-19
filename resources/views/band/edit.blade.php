<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Band Edit</title>

    <link href="{{asset('css/tableStyle.css')}}" rel="stylesheet">
  </head>

  <body>
    <h1>Edit Band Details</h1>

    <form method="post">
      {{csrf_field()}}
      <input type="hidden" name="bandId" value="{{$band->bandId}}">

      <table class ="container">
        <tr>
          <td>Band ID: </td>
          <td>{{$band->bandId}} </td>
        </tr>


        <tr>
          <td>Band Name: </td>
          <td> <input type="text" name="bandName" value="{{$band->bandName}}"> </td>
        </tr>

        <tr>
          <td>Band Type</td>
          <td>
            <select name = "bandType">
              <option value="Rock">Rock</option>
              <option value="Metal">Metal</option>
              <option value="Folk">Folk</option>
              <option value="HeavyMetal">Heavy Metal</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Option</td>
          <td><input type="submit" value="Update"></td>
        </tr>

      </table>
    </form>
    <h2 style="text-align:center; color:navy; font-size:20px"><a href="{{route('band.index')}}">Back</a></h2>

    

    <h3>  <label>

        @if($errors->any())
          @foreach($errors->all() as $errs)
            <p style="color:Red;"> {{$errs}}</p>
          @endforeach
        @endif

      </label></h3>

  </body>
</html>
