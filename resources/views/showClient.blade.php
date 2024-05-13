<!DOCTYPE html>
<html>

<head>
  <title>Show client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container" style="margin-left: 10px;">
<h2>Client data</h2><br>

<h4>cleint name : {{ $client->clientName}}</h4>
<hr>
<h4>phone :{{$client->phone}}</h4>
<hr>
<h4>Email : {{$client->email}}</h4>
<hr>
<h4>Website :{{$client->website}}</h4>
<hr>
</div>

</body>
</html>

