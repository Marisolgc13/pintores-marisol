<div>
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: black;">
  <div class="container">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav" >
      <li><a href="{{route('plantilla')}}">INICIO</a></li>
      <li class="active" ><a href="{{route('da vinci')}}" >Leonardo Da Vinci</a></li>
      <li><a href="{{route('dali')}}">Salvador Dali</a></li>
      <li><a href="{{route ('frida')}}">Frida Kahlo</a></li>
      <li><a href="{{route('picasso')}}">Pablo Picasso</a></li>
      <li><a href="{{route('vicent')}}">Vicent van Gogh/a></li>
  </div>
</nav>
</body>
</html>

</div>
