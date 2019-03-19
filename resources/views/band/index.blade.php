<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Band Index</title>
    <link href="{{asset('css/tableStyle.css')}}" rel="stylesheet">
    
  </head>

  <body>
    <h1>Band Management</h1>
    <h2>List of Bands</h2>

      <table class = "container">


        <tr style="font-size:25px;">
          <th>ID</th>
          <th>NAME</th>
          <th>Type</th>
          <th>OPTION</th>
        </tr>

        @foreach($allBands as $allBands)
        <tr style="font-size:25px;">
          <td>{{$allBands->bandId}}</td>
          <td>{{$allBands->bandName}}</td>
          <td>{{$allBands->bandType}}</td>

          <td>  <a href = "{{ route('band.edit',$allBands->bandId) }}">Edit</a> |
                <a href = "{{route('concert.insert',$allBands->bandName)}}">Concert</a> |
                <a href="{{ route('band.delete',$allBands->bandId ) }}" style="color:red">Delete</a>
          </td>
        </tr>
        @endforeach
        <tr>
          <td></td>
          <td><h3><a href="{{route('band.create')}}" style="font-size:25px; text-align:center"style="color:red">Add another band</a></h3></td>
          <td><h3><a href="{{route('admin.index')}}" style="font-size:25px; text-align:center">Back</a></h3></td>
            
          <td></td>  
      </tr>

      </table>


      


            


  </body>
</html>
