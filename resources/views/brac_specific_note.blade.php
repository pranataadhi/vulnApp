<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show note</title>
</head>
<body>
    @foreach ($result as $note)
    <h2>{{$note->postName}}</h2>
    <h3>Author name: {{$note->Author}}</h3>
    <h3>Content: </h3>
    {{$note->Content}}
    @endforeach
</body>
</html>