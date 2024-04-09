@extends('users.layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration requests</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
      <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" >My Certificates Com</a>
      </div>


    </div>
  </nav>
    @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{$message}}
  </div>

  @endif

  <h1 style="text-align: center;">Registration orders</h1>
    <div class="container">

        <div class="cv">
        <table class="table table-hover">
          <thead>
            <tr>
                <th>no</th>
                <th>First_Name</th>
                <th>Family_Name</th>
                <th>Registration_number</th>
                <th>email</th>

            </tr>
          </thead>
          <tbody>

            @foreach ( $users as $item )
 <tr class="table-primary">
             <td>  {{ $item->id}} </td>
             <td>  {{ $item->First_Name}} </td>
             <td>  {{ $item->Family_Name}} </td>
             <td>  {{ $item->Registration_number}} </td>
             <td>  {{ $item->email}} </td>
             <td>
                 <form action=" {{route('users.destroy',$item->id)}} " method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             <a href="http://"></a>
             <a href="http://"></a>


             </td>
         </tr>
            @endforeach



     </tbody>

          </tbody>
        </table>
        {!! $users->links()!!}
        </div>
      </div>

      </body>
      </html>

<br>

  <br>




@endsection