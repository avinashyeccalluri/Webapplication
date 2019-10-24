<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>welcome to signup login page</h1>
  <form action="/admin" method="post">
  @csrf
  Name: <input type="text" name="signupusername" id=""> <br> <br>
  Email: <input type="text" name="signupemail" id=""> <br> <br>
  Password <input type="text" name="signuppassword" id=""> <br> <br>
  <input type="submit" value="Signup">
  </form>
</body>
</html>