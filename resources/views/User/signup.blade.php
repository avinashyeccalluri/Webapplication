<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>welcome to User login page</h1>
<form action="/user" method="post">
  @csrf
  
  Name: <input type="text" name="name" id="" value={{ old('name') }}  > <br> <br>
  Email: <input type="email" name="email" id="" value={{ old('email') }}> <br> <br>
  Password <input type="password" name="password" id="" value={{ old('password') }}> <br> <br>
  <input type="submit" value="Signup">
  @foreach($errors->all() as $a) 
  <li>{{$a}}</li>
  @endforeach
</form>
</body>
</html>