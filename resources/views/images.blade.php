<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hello from images html

    @foreach ($artist as $data )

    <p>
       <img src="{{ asset('images/'.$data -> image_path) }}">
    </p>
        
    @endforeach
</body>
</html>