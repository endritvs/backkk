<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
<style>
  table, th, td {
  border:1px solid black;
}
</style>
  </head>



  <body>
    
<a href="{{route('interviewees.create')}}">Create</a>
    <table style="border: 1px solid black">
  <tr>
    <th>id</th>
    <th>Name</th>
    <th>Surname</th>
    <th>CV</th>
    <th>CV Path</th>
    <th>Interviewee Types</th>
    <th>Img</th>
    <th>options</th>

  </tr>

  @foreach( $intervieweesA as $i ) <!-- Qet secilin prej userave ne tabele -->
  
  <tr>
    <td> {{ $i -> id }} </td> 
    <td> {{ $i -> name }} </td> 
    <td> {{ $i -> surname }} </td> 
    <td> <a href="" Download>Download</a></td>
    <td> <a href="#">{{ $i -> external_cv_path }}</a> </td>
    <td>int</td>
    <td><img src="{{ asset($i->img) }}" alt="Foto" width='50px' height='50px' /></td>
     <td> <a href="{{route('interviewees.edit',$i->id)}}">Edit</a> </td> 
    <td> <a href="{{ route('interviewees.destroy', $i -> id) }}">Delete</a> </td>  
   
  </tr>
  
  @endforeach
</table>
{{ $intervieweesA->links() }}

<div>
  <img src="storage/app/images/DjNUYczJ1DtVgA5cc2ThfEbKRNdn8ZVLj6brU3SF.png" alt="">
</div>

  </body>
</html>