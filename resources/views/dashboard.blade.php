<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Certificates Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
 button{
             border: none;
             padding: 10px;
             width: 50%;
             font-weight:bold ;
             font-size: 15px;
             color: white;
             cursor: pointer;
             background-color:blue;
             cursor: pointer;
             font-family: 'Cairo',sans-serif ;
             margin-bottom: 20px;

}
h4{
  color:black;

  font-weight: 540;
}
  .card{
           height: 100px;
            float: right;
           flex-direction: row;

           box-shadow: 0 2px 2px;
           max-width: 100%;
            min-width: 40%;
            float: right;
            margin-top:60px ;
            margin-left: 10px;
            margin-right: 10px;
        }

  .card-body{
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    justify-content: space-between;

  }
  .text-section {
    max-width: 60%;
  }
</style
</head>
<body>

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">My Certificates Com</a>
        </div>

        <ul class="nav navbar-nav navbar-right">


            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <div class="btn btn-secondary dropdown-toggle">{{ Auth::user()->First_Name }}</div></a></li>
            <li class="nav-item dropdown">
            <li><a href="#"><span class=""></span> <div><x-dropdown-link :href="route('profile.edit')"><div  style="color: white; color: lightgray;">{{ __('Profile') }}</div></x-dropdown-link></div></a></li>
            <li>
                <a href="#">
                    <span class="">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                <div style="color: white; color: lightgray;">{{ __('Log Out') }}</div>
                            </x-dropdown-link>
                        </form>
                    </span>
                  </a>
            </li>
            </li>
    </ul>
</li>

</nav>



  <div class="container">


   <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">School certificate</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>

    </div>

 </div>

 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">Certificate of arrangement</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">Acquittal certificate</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>

    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <h4>Transfer certificate</h4>
      <button type="button" class="btn btn-success">Internal transfer</button>
      <button type="button" class="btn btn-success">External transfer</button>



  </div>
 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">Request for reintegration</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">Information form for doctoral students</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">Information form for doctoral students</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">Request to cancel registration</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4  class="card-title">Acquittal of the end of the master</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">Exoneration at the end of the bachelor's degree</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <div class="text-section">

        <h4 class="card-title">A special acquittal upon receipt of a doctorate degree</h4>

        </div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
 <div class="card"  style='width: 10rem;'>
    <div class="card-body">
      <h4 class="card-title">another request:</h4>

      <div class="text-section">
        <textarea class="form-control" rows="4" id="comment"></textarea>
</div>
      <a href='' class='btn btn-success'>REQUEST</a>


    </div>

 </div>
   </div>
</body>
</html>