<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Model</title>
</head>
<body>
    <ul>
        @foreach ($movies as $movie)
            <h1>{{$movie["title"]}}</h1>
            <p>Nationality: {{$movie["nationality"]}}</p>
            <p>Date: {{$movie["date"]}}</p>
            <p>Vote: {{$movie["vote"]}}</p>
        @endforeach
    </ul>
</body>
</html>