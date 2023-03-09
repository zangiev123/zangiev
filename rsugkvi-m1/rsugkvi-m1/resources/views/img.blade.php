
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="img">sp
@foreach ($tovars as $e)
    {{$e->name}}
    {{$e->prise}}
    <img class="photo"src="{{$e->img}}"/>
    @endforeach
</body>
</html>
