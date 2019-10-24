<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1> The books in the store</h1>

@foreach($books as $a)
  <ul>
  <u> <strong> Book & Author </strong></u>
  <li>{{$a->Book_name}}</li>
  <li>{{$a->Book_author}}</li>
  </ul>
  @endforeach
</body>
</html>