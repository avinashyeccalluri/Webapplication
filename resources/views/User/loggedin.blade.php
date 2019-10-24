<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

@if(isset(Auth::user()->name))
<h1>Welcome,{{Auth::user()->name}} </h1>
@else
<script>window.location="/user"; </script>
@endif
  
  <a href="/user/authenticate/viewbooks">View Books</a> <br> <br>
  <a href="">Purchase Books</a> <br> <br>
  <a href="/user/logout">Logout</a>
</body>
</html>

