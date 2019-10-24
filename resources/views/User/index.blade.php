<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <strong>THIS IS THE USER PAGE </strong>
  <form action="/user/authenticate" method="post">
  @csrf
  Name: <input type="text" name="loginusername" id=""> <br> <br>
  Password: <input type="text" name="loginpassword" id=""> <br> <br>
  <input type="submit" value="Submit">  <br> <br>  
  </form>
  <a href="/user/signup">Not a user?..Signup</a> <br> <br>
  @if($a=Session::get('error'))
{{$a}}
@endif

</body>
</html>